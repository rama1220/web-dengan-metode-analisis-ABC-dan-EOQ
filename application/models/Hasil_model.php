<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hasil_model extends CI_Model
{
    public function getnama()
    {
        $data = $this->db->select('*')
            ->from('data_masuk a')
            ->join('amenities b', 'a.id_foto = b.id_foto')
            ->order_by('n_penyerapandana', 'DESC')
            ->get();
        return $data;
    }
    public function get_A()
    {
        $sql = "SELECT count(if(kategori='A',kategori,NULL)) as kategori,
                       sum(if(kategori='A',n_penyerapandana,NULL)) as n_penyerapandana             
       from hasil";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function get_B()
    {
        $sql = "SELECT count(if(kategori='B',kategori,NULL)) as kategori,
                       sum(if(kategori='B',n_penyerapandana,NULL)) as n_penyerapandana
       from hasil";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function get_C()
    {
        $sql = "SELECT count(if(kategori='C',kategori,NULL)) as kategori,
                       sum(if(kategori='C',n_penyerapandana,NULL)) as n_penyerapandana
       from hasil";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function get_sum()
    {
        $this->db->select_sum('n_penyerapandana', 'jumlah');
        $this->db->from('data_masuk');
        return $this->db->get('')->row();
    }
    public function get_data()
    {
        $sql = "SELECT count(n_penyerapandana) as n_penyerapandana FROM data_masuk";
        $result = $this->db->query($sql);
        return $result->row()->n_penyerapandana;
    }
    public function analisis()
    {
        $data = $this->db->select('*')
            ->from('data_masuk a')
            ->join('amenities b', 'a.id_foto = b.id_foto')
            ->order_by('n_penyerapandana', 'DESC')
            ->get()->result();
        return $data;
    }
    public function hapus()
    {
        $this->db->truncate('hasil');
    }
}
