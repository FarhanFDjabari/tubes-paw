<?php

class Model_invoice extends CI_Model
{
    public function index()
    {

        $this->load->library('ciqrcode');

        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $qrCodeConfig = [
            'cacheable' => true,
            'cachedir' => './cache/',
            'errorlog' => './error-log/',
            'imagedir' => './uploads/qrcode/invoices/',
            'quality' => true,
            'size' => 1024,
            'black' => array(224, 255, 255),
            'white' => array(70, 130, 180)
        ];

        $this->ciqrcode->initialize($qrCodeConfig);
        $dateNow = date('Y-m-d H:i:s');
        $dateNowString = str_replace(":", "-", $dateNow);
        $qrCodeName = "$dateNowString-$nama-$alamat.png";
        $params = [
            'data' => "$dateNow--$nama--$alamat",
            'level' => 'H',
            'size' => 10,
            'savename' => FCPATH . $qrCodeConfig['imagedir'] . $qrCodeName
        ];

        $this->ciqrcode->generate($params);

        $invoice = [
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
            'qr_code' => $qrCodeName
        ];

        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = [
                'id_invoice' => $id_invoice,
                'id_barang' => $item['id'],
                'nama_barang' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            ];

            $this->db->insert('tb_pesanan', $data);
        }
        return true;
    }

    public function tampil_data()
    {
        $result = $this->db->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
