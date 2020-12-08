<?php

class Data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == '1') {
        } else if ($this->session->userdata('role_id') != '2') {
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
    }

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $title['title'] = 'Data Produk';
        $role['role'] = $this->session->userData('role_id');
        $this->load->view('templates_admin/header', $title);
        $this->load->view('templates_admin/sidebar', $role);
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        // Load QR Code Libs
        $this->load->library('ciqrcode');

        $nama_barang = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];

        $imageType = explode('/', $_FILES['gambar']['type'])[1];
        $imageName = "$nama_barang.$imageType";

        if ($gambar = '') {
        } else {
            $config = [
                'upload_path' => './uploads',
                'allowed_types' => 'jpg|jpeg|png|gif',
                'file_name' => "$imageName",
            ];

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('filename');
            }
        }
        // Config for QR Code
        $qrCodeConfig = [
            'cacheable' => true,
            'cachedir' => './cache/',
            'errorlog' => './error-log/',
            'imagedir' => './uploads/qrcode/products/',
            'quality' => true,
            'size' => 1024,
            'black' => array(224, 255, 255),
            'white' => array(70, 130, 180)
        ];

        $this->ciqrcode->initialize($qrCodeConfig);

        $qrCodeName = "$kategori-$nama_barang.png";
        $params = [
            'data' => "$kategori--$nama_barang--$keterangan--$harga--$gambar",
            'level' => 'H',
            'size' => 10,
            'savename' => FCPATH . $qrCodeConfig['imagedir'] . $qrCodeName
        ];

        $this->ciqrcode->generate($params);


        $data = [
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => str_replace(" ", "_", $imageName),
            'qr_code' => $qrCodeName
        ];
        $this->model_barang->tambah_barang($data, 'tb_barang');
        $this->session->set_flashdata('isSuccess', 'add');
        redirect('admin/data_barang/index');
    }

    public function edit($id)
    {
        $where = [
            'id_barang' => $id,
        ];
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
        $title['title'] = 'Edit Produk';
        $role['role'] = $this->session->userData('role_id');
        $this->load->view('templates_admin/header', $title);
        $this->load->view('templates_admin/sidebar', $role);
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = [
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
        ];

        $where = [
            'id_barang' => $id
        ];

        $this->model_barang->update_data($where, $data, 'tb_barang');
        $this->session->set_flashdata('isSuccess', 'edit');
        redirect('admin/data_barang/index');
    }

    public function hapus($id)
    {
        $where = [
            'id_barang' => $id
        ];
        $this->model_barang->hapus_data($where, 'tb_barang');
        $this->session->set_flashdata('isSuccess', 'delete');
        redirect('admin/data_barang/index');
    }
}
