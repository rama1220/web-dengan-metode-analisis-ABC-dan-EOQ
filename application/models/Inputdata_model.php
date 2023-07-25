<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inputdata_model extends CI_Model
{

    public function getnama()
    {
        $this->db->order_by('nama');
        $query = $this->db->get('amenities');
        return $query->result_array();
    }

    public function value()
    {
        $this->db->order_by('b_simpan');
        $query = $this->db->get('valueeoq');
        return $query->row();
    }
}
