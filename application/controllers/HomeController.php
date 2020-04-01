<?php

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load HomeModel
        //$this->load->model('HomeModel');

    }

    public function index()
    {
        $data['judul'] = 'Home';
        $data['user'] = $this->session->flashdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('Home', $data);
        $this->load->view('templates/footer');
    }

    public function register()
    {
        $data['judul'] = 'Create Account';
        $this->load->view('templates/header', $data);
        $this->load->view('Regist');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('Login');
        $this->load->view('templates/footer');
    }
}



// notice me



