<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mapel_model', 'mapel', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content' =>'admin/mapel/index',
            'mapel'   => $this->mapel->data_mapel()
        ];
		$this->load->view('templates/admin',$data);
		
	}

  public function edit($id)
  {
    
        $data = [
            'content'       =>'admin/mapel/edit',
            'mapel'         => $this->mapel->edit_mapel($id)
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function tambah()
  {
    
        $data = [
            'content'       =>'admin/mapel/add'
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $Nama_Mapel = $this->input->post('nama_mapel');

    $data = array(
      'Nama_Mapel'   => $Nama_Mapel,
      'status'       => TRUE   
    );

    $res = $this->mapel->Simpan('mapel', $data);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Mapel'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Mapel');
    }

  }

  public function update()
  {
    $Id_Mapel          = $this->input->post('id_mapel');
    $Nama_mapel        = $this->input->post('nama_mapel');

    $data = array(
      'Nama_Mapel'      => $Nama_mapel
    );

    $where = array(
      'Id_Mapel'  => $Id_Mapel
    );

    $res = $this->mapel->update($where,$data,'mapel');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/mapel'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/mapel');
    }

  }

  public function show($id,$mapel)
  {
     $data = [
            'content' =>'admin/mapel/show',
            'siswa'   => $this->mapel->data_mapel($id),
        ];
    $this->load->view('templates/admin',$data);
    
  }

  function hapus($id= null){
    $status          = FALSE;

    $data = array(
      'status'      => $status
    );

    $where = array(
      'Id_Mapel'  => $id
    );

    $res = $this->mapel->update($where,$data,'mapel');
    if ($res>=0) {
        $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/mapel'); 
    } else {
        $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/mapel');
    }
  }
  
}