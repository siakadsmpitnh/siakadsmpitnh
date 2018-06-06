<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pindah extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Pindah_model', 'Pindah', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content' =>'admin/pindah/index',
            'kelas'   => $this->Pindah->data_kelas()
        ];
		$this->load->view('templates/admin',$data);
		
	}

  public function update()
  {

    $data = array(
      'Kelas_Siswa'    => $this->input->post('kelas_sesudah')
    );

    $where = array(
      'Kelas_Siswa'  => $this->input->post('kelas_sebelum')
    );

    $res = $this->Pindah->update($where,$data,'kelassiswa');
    if ($res>=0) {
        $pesan = "Data Berhasil Diproses";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Pindah'); 
    } else {
        $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Pindah');
    }

  }
}