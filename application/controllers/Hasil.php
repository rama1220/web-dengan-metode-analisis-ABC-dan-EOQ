<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hasil extends CI_Controller
{

    public function index()
    {
        $data['Data'] = $this->Hasil_model->getnama()->result();
        $data['Sum'] = $this->Hasil_model->get_sum();
        $data['Count'] = $this->Hasil_model->get_data();
        $data['A'] = $this->Hasil_model->get_A();
        $data['B'] = $this->Hasil_model->get_B();
        $data['C'] = $this->Hasil_model->get_C();
        $this->load->view('admin/head');
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Hasil/hasil', $data);
        $this->load->view('admin/footer');
    }

    public function diagram()
    {
        $data['Sum'] = $this->Hasil_model->get_sum();
        $data['data'] = $this->Hasil_model->analisis();
        $this->load->view('admin/head');
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Hasil/diagram', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {

        $main_arr = array();
        $data = $this->input->post();
        for ($i = 0; $i < sizeof($data['id_foto']); $i++) {
            $arr = array(
                'id_foto' => $data['id_foto'][$i], 'n_penyerapandana' => $data['n_penyerapandana'][$i], 'pers_penyerapandana' => $data['pers_penyerapandana'][$i], 'pers_kumulatif' => $data['pers_kumulatif'][$i],
                'pers_item' => $data['pers_item'][$i], 'kategori' => $data['kategori'][$i]
            );
            $main_arr[] = $arr;
        }
        $this->db->insert_batch('hasil', $main_arr);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> Data Berhasil Ditambahkan! 
		</div>');
        redirect('hasil');
    }

    public function hapus()
    {

        $this->Hasil_model->hapus();
        redirect('hasil');
    }
}
