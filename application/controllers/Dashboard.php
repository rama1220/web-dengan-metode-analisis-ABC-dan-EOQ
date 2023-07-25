<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/header');
        $this->load->view('admin/content');
        $this->load->view('admin/footer');
    }
}
