<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/produk_model', 'produk');
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Produk';
        $data['produk'] = $this->produk->getAllProduk();
        $this->load->view('template/adm_header', $data);
        $this->load->view('admin/produk/index', $data);
        $this->load->view('template/adm_table_footer');
    }

}

/* End of file Produk.php */
