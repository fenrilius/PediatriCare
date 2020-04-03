<?php

class InfoController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        // load InfotModel
        // $this->load->model('InfotModel');

    }

    public function index()
    {
    	$data['judul'] = 'Konsultasi';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('Info/index', $data);
        $this->load->view('templates/footer');
    }
}