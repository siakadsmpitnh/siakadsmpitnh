<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angkatan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Angkatan_model', 'Angkatan', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content' =>'admin/angkatan/index',
            'Angkatan'   => $this->Angkatan->data_Angkatan()
        ];
		$this->load->view('templates/admin',$data);
		
	}
  public function tambah()
  {
     $data = [
            'content' =>'admin/angkatan/add',
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $data = array(
      'Tahun_Angkatan'=> $this->input->post('tahun'),
      'status'  => TRUE
    );

    $res = $this->Angkatan->Simpan('angkatan', $data);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Angkatan'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Angkatan');
    }

  }

  public function edit($id)
  {
     $data = [
            'content'  =>'admin/Angkatan/edit',
            'angkatan' => $this->Angkatan->edit_angkatan($id),
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function update()
  {
    $Id_Angkatan   = $this->input->post('id_angkatan');

    $data = array(
      'Tahun_Angkatan'  => $this->input->post('tahun')
    );

    $where = array(
      'Id_Angkatan'  => $Id_Angkatan
    );

    $res = $this->Angkatan->update($where,$data,'angkatan');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Angkatan'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Angkatan');
    }

  }

  public function show($id)
  {
    $tahun = $this->Angkatan->get_tahun($id);
    $tahunnya = $tahun->Tahun_Angkatan;
     $data = [
          'content' =>'admin/Angkatan/show',
          'Siswa'   => $this->Angkatan->get_siswa($id),
          'Tahun'   => $tahunnya
        ];
    $this->load->view('templates/admin',$data);
    
  }

  function hapus($id= null){
    $status = FALSE;
    $data = array(
      'status'  => $status
    );

    $where = array(
      'Id_Angkatan'  => $id
    );

    $res = $this->Angkatan->update($where,$data,'angkatan');
    if ($res>=0) {
        $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Angkatan'); 
    } else {
        $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Angkatan');
    }

  }

}