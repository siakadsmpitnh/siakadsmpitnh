<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_Siswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_Siswa_model', 'Kelas_Siswa', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content'     =>'admin/Kelas_siswa/index',
            'siswa'       => $this->Kelas_Siswa->data_siswa(),
            'kelas'       => $this->Kelas_Siswa->data_kelas(),
            'kelas_siswa' => $this->Kelas_Siswa->data_kelas_siswa()
    ];
		$this->load->view('templates/admin',$data);
		
	}

  public function edit($id)
  {
    
        $data = [
            'content'       =>'admin/Kelas_Siswa/edit',
            'Kelas_Siswa'         => $this->Kelas_Siswa->edit_Kelas_Siswa($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function tambah()
  {
    
        $data = [
            'content'       =>'admin/Kelas_Siswa/add'
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $data = array(
      'Kelas_Siswa'   => $this->input->post('kelas')
    );
    $where = array(
       'Nama_Siswa'    => $this->input->post('nama'),
    );

     $res = $this->Kelas_Siswa->update($where,$data,'Kelassiswa');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas_Siswa'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas_Siswa');
    }

  }

  public function update()
  {
    $NIPD             = $this->input->post('nipd');
    $Id_Kelas_Siswa          = $this->input->post('id_Kelas_Siswa');
    $Nama_Kelas_Siswa        = $this->input->post('nama_Kelas_Siswa');
    $Jenis_Kelamin    = $this->input->post('jenis_kelamin');
    $Kontak           = $this->input->post('kontak');
    $Username         = $this->input->post('username');
    $Password         = $this->input->post('password');

    $data = array(
      'NIP'           => $NIPD,
      'Nama_Kelas_Siswa'      => $Nama_Kelas_Siswa,
      'Jenis_Kelamin'  => $Jenis_Kelamin,
      'Kontak'         => $Kontak,
      'Username'       => $Username,
      'Password'       => md5($Username) 
    );

    $where = array(
      'Id_Kelas_Siswa'  => $Id_Kelas_Siswa
    );

    $res = $this->Kelas_Siswa->update($where,$data,'Kelas_Siswa');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas_Siswa'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas_Siswa');
    }

  }

  public function show($id)
  {
     $data = [
            'content' =>'admin/Kelas_Siswa/detail',
            'Kelas_Siswa'    => $this->Kelas_Siswa->edit_Kelas_Siswa($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

  function hapus($id= null){
    $status    = FALSE;
    $data = array(
      'status'           => $status
    );

    $where = array(
      'Id_Kelas_Siswa'  => $id
    );

    $res = $this->Kelas_Siswa->update($where,$data,'Kelas_Siswa');
    if ($res>=0) {
        $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas_Siswa'); 
    } else {
        $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas_Siswa');
    }
  }
}