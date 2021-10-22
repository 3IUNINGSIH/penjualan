<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_model extends CI_Model{
private $table = 'table';
private $pk    = 'pk';

    public function getAllBarang ()
    {
        return $this->db->get('barang')->result_array();
    }

    public function tambahdatabarang(){
        $data = array(
            'id_barang' => $this->input->post('id_barang',true),
            'nama_barang' => $this->input->post('nama_barang',true),
            'harga' => $this->input->post('harga',true),
            'stok' => $this->input->post('stok',true),
            
    );
    $this->db->insert('barang', $data);
    }

    public function hapusdatabarang($id){
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }

    public function getBarangbyid($id){
        return $this->db->get_where('barang',['id_barang'=>$id]) ->row_array();
    }

    public function ubahdatabarang(){
        $data = array(
            'id_barang' => $this->input->post('id_barang',true),
            'nama_barang' => $this->input->post('nama_barang',true),
            'harga' => $this->input->post('harga',true),
            'stok' => $this->input->post('stok',true)
            
        );
            $this->db->insert('id_barang',$this->input->post('id_barang'));
            $this->db->update('barang, $data');
            }

            public function caridatabarang()
            {
                $keyword=$this->input->post('keyword',true);
                $this->db->or_like('id_barang', $keyword);
                $this->db->or_like('nama_barang', $keyword);
                $this->db->or_like('harga', $keyword);
                $this->db->or_like('stok', $keyword);

                return $this->db->get('barang')->result_array();

            }
    }