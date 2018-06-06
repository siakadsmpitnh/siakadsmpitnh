<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru2_model', 'Guru', TRUE);
        $this->load->model('Input_model', 'Input', TRUE);
        if ($this->session->userdata('login') == FALSE) {
              redirect('Login');
          }else if ($this->session->userdata('level') != "2") {
              redirect('Login');
          }
    }
    
  public function index()
  {
    $nama = $this->session->userdata('Nama_Guru');
     $data = [
            'content'=>'guru/dashboard',
            'data_kelas' => $this->Guru->data_kelas_guru($nama)
        ];
    $this->load->view('templates/guru',$data);
    
  }

  public function tambah($kelas, $mapel, $guru)
  {

    $kelas1 = $this->Input->data_kelasnya($kelas);
    $kelas2 = $kelas1->Nama_Kelas;
    $guru1 = $this->Input->data_Gurunya($guru);
    $guru2 = $guru1->Nama_Guru;
    $mapel1 = $this->Input->data_mapel($mapel);
    $mapel2 = $mapel1->Nama_Mapel;
     $data = [
            'content' =>'guru/add',
            'siswa'   => $this->Input->data_siswa($kelas2),
            'kelas'   => $kelas2,
            'mapel'   => $mapel2,
            'guru'    => $guru2,
            'kelas_id'=> $kelas,
            'guru_id' => $guru,
            'mapel_id'=> $mapel

        ];
    $this->load->view('templates/guru',$data);
    
  }

   public function savedata()
  {
    $kelas = $this->input->post('kelas_id');
    $mapel = $this->input->post('mapel_id');
    $guru  = $this->input->post('guru_id');
    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik; 
    $data = array(
      'NIPD'            => $this->input->post('nipd'),
      'Nama_Guru'       => $this->input->post('guru'),
      'Nama_Kelas'      => $this->input->post('kelas'),
      'Nama_Mapel'      => $this->input->post('mapel'),
      'Tahun_Akademik'  => $tahun_nya,
      'NH1'             => $this->input->post('nh1'),
      'NH2'             => $this->input->post('nh2'),
      'NH3'             => $this->input->post('nh3'),
      'NH4'             => $this->input->post('nh4'),
      'UK1'             => $this->input->post('uk1'),
      'UK2'             => $this->input->post('uk2'),
      'UK3'             => $this->input->post('uk3'),
      'UK4'             => $this->input->post('uk4'),
      'UTS'             => $this->input->post('uts'),
      'UAST'            => $this->input->post('uast'),
      'UASP'            => $this->input->post('uasp'),
      'status'          => TRUE

    );

    $jumlah = $this->Input->hitung();
    $jumlahnya = $jumlah->b;
    $satu = '1';
    $nol = '0';

    if  ($jumlah->b == $satu) {
      // echo "c";exit();
      $res = $this->Input->Simpan('nilai',$data);
        if ($res>=0) {
            $pesan = "Data Berhasil Ditambahkan";
            $this->session->set_flashdata('pesan_sks', $pesan);
            redirect('Guru/Dashboard/tambah/'.$kelas.'/'.$mapel.'/'.$guru); 
        } else {
            $pesan = "Maaf, Data Gagal Terproses, Sesuatu Hal Terjadi";
            $this->session->set_flashdata('pesan_ggl', $pesan);
            redirect('Guru/Dashboard/tambah/'.$kelas.'/'.$mapel.'/'.$guru);
        }
    }elseif ($jumlah->b == $nol) {
     $pesan = "Maaf, data tidak terproses.Minta Admin Untuk Aktifkan Salah Satu Tahun Akademik";
            $this->session->set_flashdata('pesan_ggl', $pesan);
            // echo "a";exit();
            redirect('Guru/Dashboard');

    }else{
      // echo "z";exit();
     $pesan =  "Maaf, data tidak terproses.Minta Admin Untuk Aktifkan Hanya Salah Satu Tahun Akademik";
            $this->session->set_flashdata('pesan_ggl', $pesan);
            redirect('Guru/Dashboard');
    }

  }

  public function show($kelas)
  {
    $kelas1 = $this->Input->data_kelasnya($kelas);
    $kelas2 = $kelas1->Nama_Kelas; 
     $data = [
            'content' =>'guru/show',
            'siswa'   => $this->Input->data_nilai($kelas2),

        ];
    $this->load->view('templates/guru',$data);
  }

  function hapus($id= null){
    $kondisi         = FALSE;

    $data = array(
      'status'    => $kondisi
    );

    $where = array(
      'Id_Nilai'  => $id
    );

    $res = $this->Input->update($where,$data,'nilai');
    if ($res>=0) {
         $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Guru/Dashboard'); 
    } else {
       $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Guru/Dashboard');
    }
  }

  public function edit($id)
  {

     $data = [
            'content'    =>'Guru/edit',
            'data'  => $this->Input->data_edit($id)
        ];
    $this->load->view('templates/guru',$data);
    
  }

  public function save()
  {

    $data = array(
      'NH1'             => $this->input->post('nh1'),
      'NH2'             => $this->input->post('nh2'),
      'NH3'             => $this->input->post('nh3'),
      'NH4'             => $this->input->post('nh4'),
      'UK1'             => $this->input->post('uk1'),
      'UK2'             => $this->input->post('uk2'),
      'UK3'             => $this->input->post('uk3'),
      'UK4'             => $this->input->post('uk4'),
      'UTS'             => $this->input->post('uts'),
      'UAST'            => $this->input->post('uast'),
      'UASP'            => $this->input->post('uasp'),

    );
    $where = array(
      'Id_Nilai' => $this->input->post('id')

    );

    $res = $this->Input->update($where,$data,'nilai');
    if ($res>=0) {
         $pesan = "Nilai Berhasil Diupdate";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Guru/Dashboard'); 
    } else {
       $pesan = "Maaf, Nilai Gagal Diupdate, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Guru/Dashboard');
    }
  }

  public function cetak_nh($kelas, $mapel)
  {
    $nama = $this->session->userdata('Nama_Guru');
    $kelasnya = $this->Guru->get_kelas($kelas);
    $kelas2 = $kelasnya->Nama_Kelas;
    $mapelnya = $this->Guru->get_mapel($mapel);
    $mapel2 = $mapelnya->Nama_Mapel;
    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik; 
    ob_start();

    $data = array(
            'data1'  => $this->Guru->data_nh($kelas2, $mapel2, $nama, $tahun_nya),
            'kelas1'  => $kelas2,
            'mapel1'  => $mapel2,
            'tahun1'  => $tahun_nya,
            'gurunya' => $nama          

        );

    $this->load->view('guru/print_nh',$data);
    $html = ob_get_contents();
    // ob_end_flush();
    ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('L','A4','en','true','utf-8',array(10,1,20,25));
    $pdf->WriteHTML($html);
    $pdf->Output('nilai.pdf', 'I');
  }

  public function cetak_uk($kelas, $mapel)
  {
    $nama = $this->session->userdata('Nama_Guru');
    $kelasnya = $this->Guru->get_kelas($kelas);
    $kelas2 = $kelasnya->Nama_Kelas;
    $mapelnya = $this->Guru->get_mapel($mapel);
    $mapel2 = $mapelnya->Nama_Mapel;
    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik; 
    ob_start();

    $data = array(
            'data1'  => $this->Guru->data_nh($kelas2, $mapel2, $nama, $tahun_nya),
            'kelas1'  => $kelas2,
            'mapel1'  => $mapel2,
            'tahun1'  => $tahun_nya,
            'gurunya' => $nama          

        );

    $this->load->view('guru/print_uk',$data);
    $html = ob_get_contents();
    // ob_end_flush();
    ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('L','A4','en','true','utf-8',array(10,1,20,25));
    $pdf->WriteHTML($html);
    $pdf->Output('nilai.pdf', 'I');
  }

  public function cetak_uts($kelas, $mapel)
  {
    $nama = $this->session->userdata('Nama_Guru');
    $kelasnya = $this->Guru->get_kelas($kelas);
    $kelas2 = $kelasnya->Nama_Kelas;
    $mapelnya = $this->Guru->get_mapel($mapel);
    $mapel2 = $mapelnya->Nama_Mapel;
    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik; 
    ob_start();

    $data = array(
            'data1'  => $this->Guru->data_nh($kelas2, $mapel2, $nama, $tahun_nya),
            'kelas1'  => $kelas2,
            'mapel1'  => $mapel2,
            'tahun1'  => $tahun_nya,
            'gurunya' => $nama          

        );

    $this->load->view('guru/print_uts',$data);
    $html = ob_get_contents();
    // ob_end_flush();
    ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('L','A4','en','true','utf-8',array(10,1,20,25));
    $pdf->WriteHTML($html);
    $pdf->Output('nilai.pdf', 'I');
  }

  public function cetak_akhir($kelas, $mapel)
  {
    $nama = $this->session->userdata('Nama_Guru');
    $kelasnya = $this->Guru->get_kelas($kelas);
    $kelas2 = $kelasnya->Nama_Kelas;
    $mapelnya = $this->Guru->get_mapel($mapel);
    $mapel2 = $mapelnya->Nama_Mapel;
    $tahun = $this->Input->tahun_aktif();
    $tahun_nya = $tahun->Tahun_Akademik; 
    ob_start();

    $data = array(
            'data1'  => $this->Guru->data_nh($kelas2, $mapel2, $nama, $tahun_nya),
            'kelas1'  => $kelas2,
            'mapel1'  => $mapel2,
            'tahun1'  => $tahun_nya,
            'gurunya' => $nama          

        );

    $this->load->view('guru/print_akhir',$data);
    $html = ob_get_contents();
    // ob_end_flush();
    ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('L','A4','en','true','utf-8',array(10,1,20,25));
    $pdf->WriteHTML($html);
    $pdf->Output('nilai.pdf', 'I');
  }
}