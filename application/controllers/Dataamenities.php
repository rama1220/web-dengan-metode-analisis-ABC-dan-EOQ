<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dataamenities extends CI_Controller
{

    public function index()
    {

        $data['Data'] = $this->Dataamenities_model->getnama()->result();
        $data['Sum'] = $this->Dataamenities_model->get_sum();
   /*      $data['Val'] = $this->Dataamenities_model->value(); */
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('dataamenities/datatabel', $data);
        $this->load->view('admin/footer');
    }

    public function hapus($id_amenities)
    {
        $where = array('id_amenities' => $id_amenities);
        $this->Dataamenities_model->hapus_data($where, 'data_masuk');
        redirect('Dataamenities');
    }


    public function hapusSemua()
    {
        $id_amenities = $_POST['id_amenities'];
        $this->Dataamenities_model->hapus_semua($id_amenities);
        redirect('Dataamenities');
    }


    public function cari()
    {

        $data['Data'] = $this->Dataamenities_model->getnama()->result();
        $data['Sum'] = $this->Dataamenities_model->get_sum();
        $keyword = $this->input->post('keyword');
        $data['Data'] = $this->Dataamenities_model->cari_keyword($keyword);
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Dataamenities/datatabel', $data);
        $this->load->view('admin/footer');
    }

    public function edit($id_amenities)
    {
        $data['Data'] = $this->Dataamenities_model->isi_data($id_amenities)->result();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Dataamenities/dataedit', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $this->Dataamenities_model->update_data();
        redirect('Dataamenities');
    }


    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['Data'] = $this->Dataamenities_model->getnama()->result();
        $data['Sum'] = $this->Dataamenities_model->get_sum();
        $this->load->view('dataamenities/pdf', $data);


        $paper_size = "A4";
        $orientation = "Potrait";
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Data_Amenities.pdf", array('Attachment' => 0));
    }
}
