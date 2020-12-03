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

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($this->tablename, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($this->tablename, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->select('gambar');
        $this->db->from($table);
        $this->db->where($where);
        $gambar = $this->db->get()->row()->gambar;
        unlink("./uploads/" . $gambar);
        $this->db->or_where(['gambar' => $gambar]);
        $this->db->delete($table);
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
