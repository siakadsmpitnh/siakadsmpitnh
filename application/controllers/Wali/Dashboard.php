<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Wali_model', 'Wali', TRUE);
        $this->load->model('Input_model', 'Input', TRUE);
       	if ($this->session->userdata('login') == FALSE) {
              redirect('Login');
          }else if ($this->session->userdata('level') != "3") {
              redirect('Login');
          }
    }
    
	public function index()
	{
    $id = $this->session->userdata('Id_Guru');
    $nama = $this->Wali->data_wali($id);
    $namanya = $nama->Nama_Guru;
    $klass1 = $this->Wali->kelasnya($namanya);
    $nama_kelas = $klass1->Nama_Kelas;

    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik; 


    $data_siswa = $this->Wali->siswa($nama_kelas, $tahun_nya);
		 $data = [
            'content'=>'wali/dashboard',
            'data_wali' => $this->Wali->data_wali($id),
            'siswa' => $data_siswa,
            'kelas' => $nama_kelas,
            'tahun' => $tahun_nya,
            'nama'  => $namanya
        ];
		$this->load->view('templates/wali',$data);
		
	}

  public function lihat($nipd)
  {
     $id = $this->session->userdata('Id_Guru');
    $nama = $this->Wali->data_wali($id);
    $namanya = $nama->Nama_Guru;
    $klass1 = $this->Wali->kelasnya($namanya);
    $nama_kelas = $klass1->Nama_Kelas;

    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik; 

    $data = [
            'content'  =>'wali/nilai',
            'anak' => $this->Wali->data_anak($nipd, $tahun_nya),
            'kelas' => $nama_kelas,
            'tahun' => $tahun_nya,
            'nama'  => $namanya
        ];
    $this->load->view('templates/wali',$data);
  }

  public function cetak($id)
  {
    ob_start();

    $data = array(
            'data'  => $this->Input->data_edit($id)            
        );

    $this->load->view('wali/print',$data);
    $html = ob_get_contents();
    // ob_end_flush();
    ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en','true','utf-8',array(10,1,20,25));
    $pdf->WriteHTML($html);
    $pdf->Output('nilai.pdf', 'I');
  }

  public function cetak1($nipd)
  {
    $id = $this->session->userdata('Id_Guru');
    $nama = $this->Wali->data_wali($id);
    $namanya = $nama->Nama_Guru;
    $klass1 = $this->Wali->kelasnya($namanya);
    $nama_wal = $klass1->Nama_Wali;
    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik;
    $siswa = $this->Input->nama_siswa($nipd);
    $nama = $siswa->Nama_Siswa;
    ob_start();
    $data = array(
            'anak' => $this->Wali->data_anak($nipd, $tahun_nya),
            'tahun1'  => $tahun_nya,
            'siswa' => $nama,
            'wali'  => $nama_wal
        );

    $this->load->view('wali/cetak_laporan',$data);
    $html = ob_get_contents();
    // ob_end_flush();
    ob_end_clean();
        
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('L','A4','en','true','utf-8',array(10,1,20,25));
    $pdf->WriteHTML($html);
    $pdf->Output('nilai.pdf', 'I');
  }



}