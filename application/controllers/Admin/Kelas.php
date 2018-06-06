<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
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
            'content' =>'admin/kelas/index',
            'kelas'   => $this->kelas->data_kelas()
        ];
		$this->load->view('templates/admin',$data);
		
	}
  public function tambah()
  {
     $data = [
            'content' =>'admin/kelas/add',
            'guru'    => $this->kelas->get_guru()
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function tambahkelas()
  {
    $Nama_Kelas       = $this->input->post('nama_kelas');
    $Nama_Wali        = $this->input->post('nama_wali');
    $Nama_Pendamping1 = $this->input->post('pendamping1');
    $Nama_Pendamping2 = $this->input->post('pendamping2');

    $data = array(
      'Nama_Kelas'        => $Nama_Kelas,
      'Nama_Wali'         => $Nama_Wali,
      'Nama_Pendamping1'  => $Nama_Pendamping1,
      'Nama_Pendamping2'  => $Nama_Pendamping2,
      'status'            => TRUE
    );

    $res = $this->kelas->Simpan('kelas', $data);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas');
    }

  }

  public function add()
  {
    $Nama_Kelas       = $this->input->post('nama_kelas');
    $Nama_Wali        = $this->input->post('nama_wali');
    $Nama_Pendamping1 = $this->input->post('nama_pendamping1');
    $Nama_Pendamping2 = $this->input->post('nama_pendamping2');

    $data = array(
      'Nama_kelas'      => $Nama_Kelas,
      'Nama_Wali'       => $Nama_Wali,
      'Nama_Pendamping1'=> $Nama_Pendamping1,
      'Nama_Pendamping2'=> $Nama_Pendamping2
    );

    $res = $this->kelas->Simpan('kelas', $data);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas');
    }

  }

  public function edit($id)
  {
    $kelas        = $this->kelas->get_kelas($id); 
    $wali         = $kelas->Nama_Wali;
    $pendamping1  = $kelas->Nama_Pendamping1;
    $pendamping2  = $kelas->Nama_Pendamping2;
     $data = [
            'content'       =>'admin/kelas/edit',
            'kelas'         => $this->kelas->get_kelas($id),
            'guru'          => $this->kelas->get_guru(),
            'walisaja'      => $wali,
            'pendamping1ku' => $pendamping1,
            'pendamping2ku' => $pendamping2,
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function simpan()
  {
    $Id_Kelas         = $this->input->post('id_kelas');
    $Nama_Kelas       = $this->input->post('nama_kelas');
    $Nama_Wali        = $this->input->post('nama_wali');
    $Nama_Pendamping1 = $this->input->post('Nama_Pendamping1');
    $Nama_Pendamping2 = $this->input->post('Nama_Pendamping2');

    $data = array(
      'Nama_kelas'      => $Nama_Kelas,
      'Nama_Wali'       => $Nama_Wali,
      'Nama_Pendamping1'=> $Nama_Pendamping1,
      'Nama_Pendamping2'=> $Nama_Pendamping2
    );

    $where = array(
      'Id_Kelas'  => $Id_Kelas
    );

    $res = $this->kelas->update($where,$data,'kelas');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas');
    }

  }

  public function show($id,$kelas)
  {
    $kelas = $kelas;
     $data = [
            'content' =>'admin/kelas/show',
            'siswa'   => $this->kelas->data_siswa_kelas($id),
            'kelas'   => $kelas
        ];
    $this->load->view('templates/admin',$data);
    
  }

  function hapus($id= null){
    $status         = FALSE;

    $data = array(
      'status'      => $tatus
    );

    $where = array(
      'Id_Kelas'  => $id
    );

    $res = $this->kelas->update($where,$data,'kelas');
    if ($res>=0) {
         $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Kelas'); 
    } else {
         $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Kelas');
    }
  }
  
}