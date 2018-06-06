<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
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
            'content' =>'admin/guru/index',
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
            'content'       =>'admin/guru/edit',
            'guru'         => $this->guru->edit_guru($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function tambah()
  {
    
        $data = [
            'content'       =>'admin/guru/add'
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $NIP     = $this->input->post('nip');
    $Nama_Guru     = $this->input->post('nama_guru');
    $Jenis_Kelamin = $this->input->post('jenis_kelamin');
    $Kontak       = $this->input->post('kontak');
    $Alamat = $this->input->post('alamat');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $Level = "2";

    $data = array(
      'NIP'            => $NIP,
      'Nama_Guru'      => $Nama_Guru,
      'Jenis_Kelamin'  => $Jenis_Kelamin,
      'Kontak'         => $Kontak,
      'Alamat'         => $Alamat,
      'username'       => $username,
      'level'          => $Level,
      'password'       => md5($password),
      'status'         => TRUE
    );

    $res = $this->guru->Simpan('guru', $data);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Guru'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Guru');
    }

  }

  public function update()
  {
    $NIPD             = $this->input->post('nipd');
    $Id_Guru          = $this->input->post('id_guru');
    $Nama_Guru        = $this->input->post('nama_guru');
    $Jenis_Kelamin    = $this->input->post('jenis_kelamin');
    $Kontak           = $this->input->post('kontak');
    $Username         = $this->input->post('username');
    $Password         = $this->input->post('password');
    $a = "";

    if ($Password == $a) {
       $data = array(
      'NIP'           => $NIPD,
      'Nama_Guru'      => $Nama_Guru,
      'Jenis_Kelamin'  => $Jenis_Kelamin,
      'Kontak'         => $Kontak,
      'Username'       => $Username
      );

      $where = array(
        'Id_Guru'  => $Id_Guru
      );

      $res = $this->guru->update($where,$data,'guru');
      if ($res>=0) {
          $pesan = "Data Berhasil Diproses";
          $this->session->set_flashdata('pesan_sks', $pesan);
          redirect('Admin/Guru'); 
      } else {
          $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
          $this->session->set_flashdata('pesan_ggl', $pesan);
          redirect('Admin/Guru');
      }
      
    }else{
      $data = array(
        'NIP'           => $NIPD,
        'Nama_Guru'      => $Nama_Guru,
        'Jenis_Kelamin'  => $Jenis_Kelamin,
        'Kontak'         => $Kontak,
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
          redirect('Admin/Guru'); 
      } else {
          $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
          $this->session->set_flashdata('pesan_ggl', $pesan);
          redirect('Admin/Guru');
      }
    }

  }

  public function show($id)
  {
     $data = [
            'content' =>'admin/guru/detail',
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
        redirect('Admin/Guru'); 
    } else {
        $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Guru');
    }
  }
}