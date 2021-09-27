<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_model extends CI_Model{
private $table = 'table';
private $pk    = 'pk';

    public function getAllBarang ()
    {
        return $this->db->get('barang')->result_array();
    }

}