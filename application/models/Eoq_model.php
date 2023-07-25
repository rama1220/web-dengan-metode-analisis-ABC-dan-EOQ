<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eoq_model extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('valueeoq');
    }
    public function hasil()
    {
        $this->db->select('*');
        $this->db->from('data_masuk a');
        $this->db->join('valueeoq b', 'a.id_value = b.id_value', 'LEFT');
        $this->db->join('amenities c', 'a.id_foto = c.id_foto', 'LEFT');
        $this->db->join('hasil d', 'c.id_foto = d.id_foto', 'LEFT');
        $this->db->order_by('pers_kumulatif', 'ASC');
        return $this->db->get();
    }



    public function input_data($data)
    {
        $this->db->insert('valueeoq', $data);
    }

    public function hapus_val($id)
    {
        $this->db->where('id_value', $id);
        $this->db->delete('valueeoq');
    }


    public function isi_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
