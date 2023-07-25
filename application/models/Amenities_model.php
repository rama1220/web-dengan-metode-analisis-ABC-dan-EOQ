<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Amenities_model extends CI_Model
{

	public function tampil_data()
	{
		return $this->db->get('amenities');
	}

	public function input_data($data)
	{
		$this->db->insert('amenities', $data);
	}

	public function hapus_ame($id)
	{
		$this->db->where('id_foto', $id);
		$this->db->delete('amenities');
	}

	public function hapus_data($id)
	{
		$this->db->where('id_foto', $id);
		$this->db->delete('data_masuk');
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

	public function cari_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('amenities');
		$this->db->like('nama', $keyword);
		return $this->db->get()->result();
	}
}
