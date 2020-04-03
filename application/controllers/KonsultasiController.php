<?php

class KonsultasiController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        // load KonsultasiModel
        //$this->load->model('KonsultasiModel');

    }

    public function index()
    {
    	$data['judul'] = 'Konsultasi';
        $data['user'] = $this->session->userdata('user');

        // pr -> bikin if kalo belum login ke login, kalo udah login lanjut

        $this->load->view('templates/header', $data);
        $this->load->view('Konsultasi/index', $data);
        $this->load->view('templates/footer');
    }
}