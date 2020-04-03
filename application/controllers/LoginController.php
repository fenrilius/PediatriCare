<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccountModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Login';
        // session_start();

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        // username = guest kalo gak login
        $guest =  array('username' => 'guest' );
        $this->session->set_userdata('user',$guest);
        

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Login');
            $this->load->view('templates/footer');
        } else {
            $uname = $this->input->post('username', true);
            $data = $this->AccountModel->getAccountByUsername($uname);
            if ($data) {
                $pass = $this->input->post('password');
                if ($data['password'] == $pass) {
                    $sess_data = array(
                        'username' => $data['username'],
                        'fullname' => $data['fullname'],
                        'email' => $data['email']
                    );
                    $this->session->set_userdata('user', $sess_data);
                    redirect('HomeController');
                } else {
                    redirect('LoginController'); //pass salah
                }
            } else {
                redirect('LoginController'); //email salah
            }
        }
    }

}
