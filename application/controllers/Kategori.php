<?php

class Kategori extends CI_Controller
{
    public function snacks()
    {
        $data['snacks'] = $this->model_kategori->data_snacks()->result();
        $title['title'] = 'Snacks';
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('snacks', $data);
        $this->load->view('templates/footer');
    }

    public function fruit_vegies()
    {
        $data['fruit_vegies'] = $this->model_kategori->data_fruit_vegies()->result();
        $title['title'] = 'Fruit & Vegies';
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('fruit_vegies', $data);
        $this->load->view('templates/footer');
    }

    public function meat()
    {
        $data['meat'] = $this->model_kategori->data_meat()->result();
        $title['title'] = 'Meat';
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('meat', $data);
        $this->load->view('templates/footer');
    }

    public function home_tools()
    {
        $data['home_tools'] = $this->model_kategori->data_home_tools()->result();
        $title['title'] = 'Home Tools';
        $this->load->view('templates/header', $title);
        $this->load->view('templates/sidebar');
        $this->load->view('home_tools', $data);
        $this->load->view('templates/footer');
    }
}
