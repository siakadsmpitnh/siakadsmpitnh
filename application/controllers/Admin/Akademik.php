<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Akademik_model', 'Akademik', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content'    =>'admin/akademik/index',
            'akademik'   => $this->Akademik->data_akademik()
        ];
		$this->load->view('templates/admin',$data);
		
	}
  public function tambah()
  {
     $data = [
            'content' =>'admin/akademik/add',
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $data = array(
      'Tahun_Akademik'=> $this->input->post('tahun'),
      'status'  => FALSE
    );

    $res = $this->Akademik->Simpan('akademik', $data);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Akademik'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Akademik');
    }

  }

  public function edit($id)
  {
     $data = [
            'content'  =>'admin/Akademik/edit',
            'Akademik' => $this->Akademik->edit_Akademik($id),
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function update()
  {
    $Id_Akademik   = $this->input->post('id_Akademik');

    $data = array(
      'Tahun_Akademik'  => $this->input->post('tahun')
    );

    $where = array(
      'Id_Akademik'  => $Id_Akademik
    );

    $res = $this->Akademik->update($where,$data,'Akademik');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Akademik'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Akademik');
    }

  }

  public function show($id)
  {
    $tahun = $this->Akademik->get_tahun($id);
    $tahunnya = $tahun->Tahun_Akademik;
     $data = [
          'content' =>'admin/Akademik/show',
          'Siswa'   => $this->Akademik->get_siswa($id),
          'Tahun'   => $tahunnya
        ];
    $this->load->view('templates/admin',$data);
    
  }

  function hapus($id= null){

    $datanya = $this->Akademik->ambil_status($id);
    $statusnya = $datanya->Status;
    if ($statusnya == 0) {
      $nya = '1';
    }else{
      $nya = '0';
    }

    $data = array(
      'status'  => $nya
    );

    $where = array(
      'Id_Akademik'  => $id
    );

    $res = $this->Akademik->update($where,$data,'Akademik');
    if ($res>=0) {
        $pesan = "Status Terganti";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Akademik'); 
    } else {
        $pesan = "Maaf,Status Gagal Terganti";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Akademik');
    }

  }

}