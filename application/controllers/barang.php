<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
         $data['judul']='barang';
         $data['barang']=$this->barang_model->getAllBarang();
         if( $this->input->post('keyword')){
             $data['barang']=$this->barang_model->caridatabarang();
         }
        $this->load->view('templates/header',$data);
        $this->load->view('barang/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul']='tambah data barang';

        $this->form_validation->set_rules('id_barang', 'kode barang', 'required'); 
        $this->form_validation->set_rules('nama_barang', 'nama barang', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');
        $this->form_validation->set_rules('stok', 'stok', 'required|numeric');
        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates/header',$data);
                    $this->load->view('barang/tambah');
                    $this->load->view('templates/footer');
                }
                else
                {
                       $this->barang_model->tambahdatabarang();
                       $this->session->set_flashdata('flash','berhasil ditambahkan');
                       redirect('barang');
                }
       
    }

    public function hapus($id){
        $this->barang_model->hapusdatabarang($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect ('barang');
    }

    public function detail($id){  
        $data['judul']='detail barang';
        $data['barang']=$this->barang_model->getbarangbyid($id);
       $this->load->view('templates/header',$data);
       $this->load->view('barang/detail',$data);
       $this->load->view('templates/footer');
   }



    public function ubah($id){
        $data['judul']='ubah data barang';
        $data['barang']=$this->barang_model->getbarangbyid($id);

        $this->form_validation->set_rules('id_barang', 'kode barang', 'required'); 
        $this->form_validation->set_rules('nama_barang', 'nama barang', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');
        $this->form_validation->set_rules('stok', 'stok', 'required|numeric');

        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates/header',$data);
                    $this->load->view('barang/ubah',$data);
                    $this->load->view('templates/footer');
                }
                else
                {
                       $this->barang_model->ubahdatabarang();
                       $this->session->set_flashdata('flash','berhasil diubah');
                       redirect('barang');
                }
    } 
    
    }

