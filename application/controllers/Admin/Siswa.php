<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model', 'Siswa', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content' =>'admin/Siswa/index',
            'Siswa'   => $this->Siswa->data_Siswa()
        ];
		$this->load->view('templates/admin',$data);
		
	}
  public function tambah()
  {
     $data = [
            'content' =>'admin/Siswa/add',
            'Siswa'   => $this->Siswa->data_Siswa(),
            'tahun'   => $this->Siswa->data_tahun()
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function add()
  {
    $data = array(
      'NIPD'          => $this->input->post('nipd'),
      'NISN'          => $this->input->post('nisn'),
      'Nama_Siswa'    => $this->input->post('nama'),
      'Tahun_Angkatan'=> $this->input->post('tahun'),
      'Jenis_Kelamin' => $this->input->post('jenis_kelamin'),
      'Tempat_Lahir'  => $this->input->post('tempat'),
      'Tanggal_Lahir' => $this->input->post('tanggal'),
      'Alamat'        => $this->input->post('alamat'),
      'kondisi'       => TRUE
    );
    $data1 = array(
      'Nama_Siswa'    => $this->input->post('nipd')
    );

    $res = $this->Siswa->Simpan('siswa', $data);
    $res = $this->Siswa->Simpan('kelassiswa', $data1);
    if ($res) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Siswa'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Siswa');
    }

  }

  public function edit($id)
  {
    $Siswa  = $this->Siswa->get_Siswa($id);
    $tahun = $Siswa->Tahun_Angkatan;
     $data = [
            'content'  =>'admin/Siswa/edit',
            'Siswa'    => $this->Siswa->get_Siswa($id),
            'tahun'    => $this->Siswa->data_tahun(),
            'tahunnya' => $tahun
        ];
    $this->load->view('templates/admin',$data);
    
  }

  public function update()
  {
    $Id_Siswa         = $this->input->post('id_siswa');

    $data = array(
      'NIPD'          => $this->input->post('nipd'),
      'NISN'          => $this->input->post('nisn'),
      'Nama_Siswa'    => $this->input->post('nama'),
      'Tahun_Angkatan'=> $this->input->post('tahun'),
      'Jenis_Kelamin' => $this->input->post('jenis_kelamin'),
      'Tempat_Lahir'  => $this->input->post('tempat'),
      'Tanggal_Lahir' => $this->input->post('tanggal'),
      'Alamat'        => $this->input->post('alamat')
    );

    $where = array(
      'Id_Siswa'  => $Id_Siswa
    );

    $res = $this->Siswa->update($where,$data,'Siswa');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Siswa'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Siswa');
    }

  }

  public function show($id)
  {
     $data = [
          'content' =>'admin/Siswa/show',
          'Siswa'    => $this->Siswa->get_Siswa($id),
        ];
    $this->load->view('templates/admin',$data);
    
  }

  function hapus($id= null){
    $kondisi         = FALSE;

    $data = array(
      'kondisi'    => $kondisi
    );

    $where = array(
      'Id_Siswa'  => $id
    );

    $res = $this->Siswa->update($where,$data,'siswa');
    if ($res>=0) {
         $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Siswa'); 
    } else {
       $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Siswa');
    }
  }
}