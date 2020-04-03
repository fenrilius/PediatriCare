<?php

class AboutUsController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$data['judul'] = 'About Us';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('AboutUs', $data);
        $this->load->view('templates/footer');
    }
}