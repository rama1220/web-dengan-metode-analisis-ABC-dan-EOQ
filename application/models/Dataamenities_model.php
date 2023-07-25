<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataamenities_model extends CI_Model
{

    public function isi_data($id_amenities)
    {
        $this->db->select('*');
        $this->db->from('amenities a');
        $this->db->join('data_masuk b', 'a.id_foto = b.id_foto', 'LEFT');
        $this->db->where('id_amenities', $id_amenities);
        return $this->db->get();
    }

    public function update_data()
    {


        $data = array(
            'id_amenities'          => $this->input->post('id_amenities'),
            'satuan'                => $this->input->post('satuan'),
            'harga_satuan'          => $this->input->post('harga_satuan'),
            'kuan_pemakaian'        => $this->input->post('kuan_pemakaian'),
            'n_penyerapandana'      => $this->input->post('n_penyerapandana'),


        );

        $this->db->where('id_amenities', $this->input->post('id_amenities'));
        return $this->db->update('data_masuk', $data);
    }


    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapus_semua($id_amenities)
    {
        $this->db->where_in('id_amenities', $id_amenities);
        $this->db->delete('data_masuk');
    }

    public function getnama()
    {
        $data = $this->db->select('*')
            ->from('data_masuk a')
            ->join('amenities b', 'a.id_foto = b.id_foto', 'LEFT')
            ->join('valueeoq c', 'a.id_value = c.id_value', 'LEFT')
            /*    ->order_by('n_penyerapandana', 'DESC') */
            ->get();
        return $data;
    }


    public function cari_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('data_masuk a');
        $this->db->join('amenities b', 'a.id_foto = b.id_foto');
        $this->db->join('valueeoq c', 'a.id_value = c.id_value');
        $this->db->like('nama', $keyword);
        return $this->db->get()->result();
    }

    public function get_sum()
    {

        $this->db->select_sum('n_penyerapandana', 'jumlah');
        $this->db->from('data_masuk');
        return $this->db->get('')->row();
    }
}
