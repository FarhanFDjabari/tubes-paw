<?php

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == '1') {
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda <strong>Belum Login</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
            );
            redirect('auth/login');
        }
        $this->load->model('model_user', 'users');
    }

    public function index()
    {
        $allUser = $this->users->getAll();
        $title['title'] = 'Data User';
        $role['role'] = $this->session->userData('role_id');
        $this->load->view('templates_admin/header', $title);
        $this->load->view('templates_admin/sidebar', $role);
        $this->load->view('admin/data_user', ['users' => $allUser]);
        $this->load->view('templates_admin/footer');
    }

    public function store()
    {
        $password = $this->input->post('password');
        $confirmPassword = $this->input->post('confirmPassword');
        if ($password != $confirmPassword) {
            $this->set->flashdata('failed', "Password and Password Confirmation doesn't match");
            redirect('data_user');
        }
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $role_id = $this->input->post('role');

        $newData = [
            "nama" => $nama,
            "username" => $username,
            "password" => $hashPassword,
            "role_id" => $role_id
        ];
        $this->users->store($newData);
        redirect('admin/data_user');
    }

    public function update()
    {
        // var_dump($this->input->post());
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $nama = $this->input->post('name');
        $role_id = $this->input->post('role_id');

        $newData = [
            'username' => $username,
            'nama' => $nama,
            'role_id' => $role_id
        ];
        $this->users->update($id, $newData);
        redirect('admin/data_user');
    }

    public function destroy()
    {
        $id = $this->input->post('id');
        $this->users->destroy($id);
        redirect('admin/data_user');
    }
}
