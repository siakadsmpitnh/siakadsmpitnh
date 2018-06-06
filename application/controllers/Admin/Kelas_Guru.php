<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_Guru extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_Guru_model', 'Kelas_Guru', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content'     =>'admin/Kelas_guru/index',
            'kelas'       => $this->Kelas_Guru->data_kelas(),
            'mapel'       => $this->Kelas_Guru->data_pelajaran(),
            'guru'        => $this->Kelas_Guru->data_guru(),
            'kelas_guru'  => $this->Kelas_Guru->data_kelas_guru()
    ];
		$this->load->view('templates/admin',$data);
		
	}

  public function edit($id)
  {
    
        $data = [
            'content'       =>'admin/Kelas_Guru/edit',
            'Kelas_Guru'         => $this->Kelas_Guru->edit_Kelas_Guru($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function tambah()
  {
    
        $data = [
            'content'       =>'admin/Kelas_Guru/add'
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $data = array(
      'Nama_Guru'   => $this->input->post('guru'),
      'Nama_Mapel'  => $this->input->post('pelajaran'),
      'Nama_Kelas'  => $this->input->post('kelas'),
      'status'      => TRUE
    );

     $res = $this->Kelas_Guru->Simpan('kelasguru',$data);
    if ($res>=0) {
        $pesan = "Data Berhasil Ditambahkan";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas_Guru'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas_Guru');
    }

  }

  function hapus($id= null){
    $status    = FALSE;
    $data = array(
      'status'           => $status
    );

    $where = array(
      'Id_Kelas_Guru'  => $id
    );

    $res = $this->Kelas_Guru->update($where,$data,'kelasguru');
    if ($res>=0) {
        $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas_Guru'); 
    } else {
        $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas_Guru');
    }
  }
}