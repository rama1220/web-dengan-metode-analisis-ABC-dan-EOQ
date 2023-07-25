<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Inputdata extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('inputdata/buattabel');
        $this->load->view('admin/footer');
    }

    public function formtabel()
    {

        $data['nama'] = $this->Inputdata_model->getnama();
        $data['val'] = $this->Inputdata_model->value();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('inputdata/formtabel', $data);
        $this->load->view('admin/footer');
    }
    public function tambah()
    {
        $main_arr = array();
        $data = $this->input->post();
        for ($i = 0; $i < sizeof($data['id_foto']); $i++) {
            $arr = array('id_foto' => $data['id_foto'][$i], 'id_value' => $data['id_value'][$i], 'satuan' => $data['satuan'][$i], 'harga_satuan' => $data['harga_satuan'][$i], 'kuan_pemakaian' => $data['kuan_pemakaian'][$i], 'n_penyerapandana' => $data['n_penyerapandana'][$i]);
            $main_arr[] = $arr;
        }

        $this->db->insert_batch('data_masuk', $main_arr);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> Data Berhasil Ditambahkan! 
		</div>');
        redirect('Dataamenities');
    }
}
