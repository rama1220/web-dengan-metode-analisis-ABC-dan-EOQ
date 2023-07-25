<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Eoq extends CI_Controller
{

    public function index()
    {
        $data['Value'] = $this->Eoq_model->tampil_data()->result();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Eoq/value', $data);
        $this->load->view('admin/footer');
    }

    public function hasil()
    {
        $data['Value'] = $this->Eoq_model->hasil()->result();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Eoq/hasileoq', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Eoq/tambahvalue');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi()
    {

        $b_penanganan     =  $this->input->post('b_penanganan');
        $b_simpan     =  $this->input->post('b_simpan');

        $data = array(
            'b_penanganan' => $b_penanganan,
            'b_simpan' => $b_simpan,

        );

        $this->Eoq_model->input_data($data, 'valueeoq');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> Data Berhasil Ditambahkan! 
		</div>');
        redirect('Eoq');
    }

    public function update()
    {
        $id_value     =  $this->input->post('id_value');
        $b_penanganan     =  $this->input->post('b_penanganan');
        $b_simpan     =  $this->input->post('b_simpan');

        $data = array(
            'id_value' => $id_value,
            'b_penanganan' => $b_penanganan,
            'b_simpan' => $b_simpan,

        );

        $where = array(
            'id_value' => $id_value
        );

        $this->Eoq_model->update_data($where, $data, 'valueeoq');
        redirect('Eoq');
    }

    public function hapus($id)
    {

        $this->Eoq_model->hapus_val($id);
        redirect('Eoq');
    }

    public function edit($id_value)
    {
        $where = array('id_value' => $id_value);
        $data['Value'] = $this->Eoq_model->isi_data($where, 'Valueeoq')->result();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('Eoq/editvalue', $data);
        $this->load->view('admin/footer');
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['Value'] = $this->Eoq_model->hasil()->result();
        $this->load->view('Eoq/pdf', $data);


        $paper_size = "A4";
        $orientation = "Potrait";
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Perencanaan_Amenities.pdf", array('Attachment' => 0));
    }
}
