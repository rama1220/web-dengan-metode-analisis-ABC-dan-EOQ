<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Amenities extends CI_Controller
{

    public function index()
    {
        $data['Amenities'] = $this->Amenities_model->tampil_data()->result();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('amenities/tabelamenities', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('amenities/tambah_amenities');
        $this->load->view('admin/footer');
    }

    public function tambah_aksi()
    {

        $nama     =  $this->input->post('nama');
        $foto         = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "upload gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'foto' => $foto,

        );

        $this->Amenities_model->input_data($data, 'amenities');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> Data Berhasil Ditambahkan! 
		</div>');
        redirect('Amenities');
    }

    public function update()
    {

        $id_foto       = $this->input->post('id_foto');
        $nama          = $this->input->post('nama');
        $foto          = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                redirect('Amenities');
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_foto'   => $id_foto,
            'nama'      => $nama,
            'foto'      => $foto,
        );

        $where = array(
            'id_foto' => $id_foto
        );

        $this->Amenities_model->update_data($where, $data, 'amenities');
        redirect('Amenities');
    }

    public function hapus($id)
    {

        $this->Amenities_model->hapus_ame($id);
        $this->Amenities_model->hapus_data($id);
      
        redirect('Amenities');
    }

    public function edit($id_foto)
    {
        $where = array('id_foto' => $id_foto);
        $data['Amenities'] = $this->Amenities_model->isi_data($where, 'amenities')->result();
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('amenities/edit_amenities', $data);
        $this->load->view('admin/footer');
    }
    public function cari()
    {
        $keyword = $this->input->post('keyword');
        $data['Amenities'] = $this->Amenities_model->cari_keyword($keyword);
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('amenities/tabelamenities', $data);
        $this->load->view('admin/footer');
    }
}
