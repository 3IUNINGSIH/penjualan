<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
    }

    function index()
    {
         $data['judul']='barang';
         $data['barang']=$this->barang_model->getAllBarang();
        $this->load->view('templates/header',$data);
        $this->load->view('barang/index');
        $this->load->view('templates/footer');
    }

}