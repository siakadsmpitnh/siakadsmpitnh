<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Wali1_model', 'guru', TRUE);
        $this->load->model('Kelas_model', 'kelas', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content' =>'admin/wali/index',
            'guru'   => $this->guru->data_guru()
        ];
		$this->load->view('templates/admin',$data);
		
	}

  function check_email(){
        $username = $this->input->post('username',true);

        $cek = $this->db->where(array('username'=>$username))->get('guru');
        if($cek->num_rows()>0){
            $response = ['status'=>0];
        } else{
            $response = ['status'=>1];
        }

        echo json_encode($response);
    }

  public function edit($id)
  {
    
        $data = [
            'content'       =>'admin/wali/edit',
            'guru'         => $this->guru->edit_guru($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function tambah()
  {
    
        $data = [
            'content' =>'admin/wali/add',
            'guru'    => $this->kelas->get_walinya()
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $Nama_Guru     = $this->input->post('nama_guru');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $Level = "3";

    $cek = $this->guru->cek($Nama_Guru);
    $cek_nya = $cek->b;
    if ($cek_nya >= 1) {
        $pesan = "Maaf, Login Kelas tersebut sudah ditambahkan";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Wali'); 
    }else{

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
          redirect('Admin/Wali'); 
      } else {
          $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
          $this->session->set_flashdata('pesan_ggl', $pesan);
          redirect('Admin/Wali');
      }
    }

  }

  public function update()
  {
    $Id_Guru          = $this->input->post('id_guru');
    $Nama_Guru        = $this->input->post('nama_guru');
    $Username         = $this->input->post('username');
    $Password         = $this->input->post('password');
    $a = "";


    if ($Password == $a) {
     $data = array(
      'NIP'           => $NIPD,
      'Nama_Guru'      => $Nama_Guru,
      'Username'       => $Username,
      );

      $where = array(
        'Id_Guru'  => $Id_Guru
      );

        $res = $this->guru->update($where,$data,'guru');
        if ($res>=0) {
            $pesan = "Data Berhasil Diproses";
            $this->session->set_flashdata('pesan_sks', $pesan);
            redirect('Admin/Wali'); 
        } else {
            $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
            $this->session->set_flashdata('pesan_ggl', $pesan);
            redirect('Admin/Wali');
        }

    }else{
      $data = array(
        'NIP'           => $NIPD,
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
            redirect('Admin/Wali'); 
        } else {
            $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
            $this->session->set_flashdata('pesan_ggl', $pesan);
            redirect('Admin/Wali');
        }
    }

  }

  public function show($id)
  {
     $data = [
            'content' =>'admin/wali/detail',
            'guru'    => $this->guru->edit_guru($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

  function hapus($id= null){
    $status    = FALSE;
    $data = array(
      'status'           => $status
    );

    $where = array(
      'Id_Guru'  => $id
    );

    $res = $this->guru->update($where,$data,'guru');
    if ($res>=0) {
        $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Wali'); 
    } else {
        $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Wali');
    }
  }
}