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

        $user = $this->input->post('username', true);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Login');
            $this->load->view('templates/footer');
        } else {
            $data = $this->AccountModel->getAccountByUsername($user);
            if ($data) {
                $cek = $this->input->post('password');

                $data2 = $this->AccountModel->getAccountByPassword($user);

                if ($data2['password'] == $cek) {
                    echo 'password benar';
                    $sess_data = array(
                        'username' => $data->username,
                        'password' => $data->password,
                        'fullname' => $data->fullname,
                        'email' => $data->email
                    );
                    $this->session->set_userdata('data_akun', $sess_data);
                    redirect('HomeController');
                } else {
                    // redirect('Login'); //pass salah
                }
            } else {
                // redirect('Login'); //email salah
            }
        }
    }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect('drew/login');
    // }

}
