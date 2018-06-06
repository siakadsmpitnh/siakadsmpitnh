<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'Admin', TRUE);
         $this->load->model('Guru_model', 'guru', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content'    =>'admin/admin/index',
            'data'   => $this->Admin->data_admin()
        ];
		$this->load->view('templates/admin',$data);
		
	}

  public function edit($id)
  {
    
        $data = [
            'content'       =>'admin/admin/edit',
            'guru'         => $this->guru->edit_guru($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

   public function update()
  {
    $Id_Guru          = $this->input->post('id');
    $Nama_Guru        = $this->input->post('nama');
    $Username         = $this->input->post('username');
    $Password         = $this->input->post('password');
    $a = "";


    if ($Password == $a) {
        $data = array(
          'Nama_Guru'      => $Nama_Guru,
          'Username'       => $Username
        );

        $where = array(
          'Id_Guru'  => $Id_Guru
        );

        $res = $this->guru->update($where,$data,'guru');
        if ($res>=0) {
            $pesan = "Data Berhasil Diproses";
            $this->session->set_flashdata('pesan_sks', $pesan);
            redirect('Admin/Admin'); 
        } else {
            $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
            $this->session->set_flashdata('pesan_ggl', $pesan);
            redirect('Admin/Admin');
        }
    }else{
      $data = array(
        'Nama_Guru'      => $Nama_Guru,
        'Username'       => $Username,
        'Password'       => md5($Password) 
      );

      $where = array(
        'Id_Guru'  => $Id_Guru
      );

      $res = $this->guru->update($where,$data,'guru');
      if ($res>=0) {
          $pesan = "Data Berhasil Diproses";
          $this->session->set_flashdata('pesan_sks', $pesan);
          redirect('Admin/Admin'); 
      } else {
          $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
          $this->session->set_flashdata('pesan_ggl', $pesan);
          redirect('Admin/Admin');
      }
    }

  }

   public function tambah()
  {
    
        $data = [
            'content'       =>'admin/admin/add'
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $Nama_Guru     = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $Level = "1";

    $data = array(
      'Nama_Guru'      => $Nama_Guru,
      'username'       => $username,
      'level'          => $Level,
      'password'       => md5($password),
      'status'         => TRUE
    );

    $res = $this->guru->Simpan('guru', $data);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Admin'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Admin');
    }

  }

   function hapus($id= null){

    $where = array(
      'Id_Guru'  => $id
    );

    $res = $this->guru->Hapus('guru', $where);
    if ($res>=0) {
        $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Admin'); 
    } else {
        $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Admin');
    }
  }

}