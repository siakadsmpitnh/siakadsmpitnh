<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('M_login', 'login', TRUE);
    }

    public function index()
    {
        if ($this->session->userdata('login') == TRUE)
        {
            if ($this->session->userdata('level') == 1) {
                redirect('Admin/Dashboard');
            }else{
                redirect('Login');
            }
        }else{
            // validasi sukses
            if($this->login->validasi())
            {
                // cek di database sukses
                if($this->login->cek_user())
                {
                   if($this->session->userdata('level') == 2) {
                        redirect('Guru/Dashboard');
                    }elseif($this->session->userdata('level') == 3) {
                        redirect('Wali/Dashboard');
                    }else{
                        redirect('Login');
                    }
                }
                // cek database gagal
                else
                {
                    $pesan = "Maaf, Username atau Password Tidak Cocok";
                    $this->session->set_flashdata('pesan_ggl', $pesan);
                    redirect('Login');
                }
            }
            // validasi gagal
            else
            {
                $this->load->view('login');
            }
        }
    }

    public function logout()
    {
        $this->login->logout();
        redirect('Index');
    }
}