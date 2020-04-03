<?php

class RumahSakitController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        // load RumahSakitModel
        $this->load->model('RumahsakitModel');

    }

    public function index()
    {
    	$data['judul'] = 'Rumah Sakit';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('RumahSakit/index', $data);
        $this->load->view('templates/footer');
    }
}