<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data['judul']='toko penjual';
        $this->load->view('templates/header',$data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

}