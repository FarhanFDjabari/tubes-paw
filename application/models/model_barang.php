<?php

class Model_barang extends CI_Model
{

    protected $tablename = 'tb_barang';

    public function tampil_data()
    {
        return $this->db->get($this->tablename);
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($this->tablename, $data);
    }

    public function edit_barang( $condition, $table)
    {
        return $this->db->get_where($this->tablename, $condition);
    }

    public function update_data($condition, $data, $table)
    {
        $this->db->where($condition);
        $this->db->update($this->tablename, $data);
    }

    public function hapus_data($condition, $table)
    {
        $item = $this->db->where($condition)->from($this->tablename);
        $fetchedItem = $item->get()->row();
        $productImage = $fetchedItem->gambar;
        $qrCode = $fetchedItem->qr_code;
        unlink("./uploads/$productImage");
        unlink("./uploads/qrcode/products/$qrCode");
        $this->db->delete($this->tablename, $condition);
    }

    public function find($id)
    {
        $result = $this->db->where('id_barang', $id)->limit(1)->get($this->tablename);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_barang($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)->get($this->tablename);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
