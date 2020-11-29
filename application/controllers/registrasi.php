<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $title['title'] = 'Registrasi';

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama lengkap tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
            'required' => 'Password tidak boleh kosong',
            'matches' => 'Password tidak cocok'
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $title);
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id' => $this->input->post('role_id'),
            ];

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
