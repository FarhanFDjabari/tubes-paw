<?php

class Model_kategori extends CI_Model
{
    public function data_snacks()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Snacks']);
    }

    public function data_fruit_vegies()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Fruit & Vegies']);
    }

    public function data_meat()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Meat']);
    }

    public function data_home_tools()
    {
        return $this->db->get_where('tb_barang', ['kategori' => 'Home Tools']);
    }
}
