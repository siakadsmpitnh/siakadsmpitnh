<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Bank_model', 'Bank', TRUE);
        $this->load->model('Input_model', 'Input', TRUE);
     	if ($this->session->userdata('login') == FALSE) {
            redirect('Login');
        }else if ($this->session->userdata('level') != "1") {
            redirect('Login');
        }
    }
    
	public function index()
	{
		 $data = [
            'content' =>'admin/bank/index',
            'datanya'   => $this->Bank->data_nilai()
        ];
		$this->load->view('templates/admin',$data);
		
	}

    function hapus($id= null){
    $kondisi         = FALSE;

    $data = array(
      'status'    => $kondisi
    );

    $where = array(
      'Id_Nilai'  => $id
    );

    $res = $this->Bank->update($where,$data,'nilai');
    if ($res>=0) {
         $pesan = "Data Berhasil Dihapus";
        $this->session->set_flashdata('pesan_sks', $pesan);
        redirect('Admin/Bank'); 
    } else {
       $pesan = "Maaf, Data Gagal Dihapus, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Bank');
    }
  }

  public function edit($id)
  {

     $data = [
            'content'    =>'admin/bank/edit',
            'data'  => $this->Input->data_edit($id)
        ];
    $this->load->view('templates/admin',$data);
    
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
        redirect('Admin/Bank'); 
    } else {
       $pesan = "Maaf, Nilai Gagal Diupdate, Sesuatu Hal Terjadi";
        $this->session->set_flashdata('pesan_ggl', $pesan);
        redirect('Admin/Bank');
    }
  }

  public function cetak($id)
  {
    ob_start();

    $data = array(
            'data'  => $this->Input->data_edit($id)            
        );

    $this->load->view('admin/bank/print',$data);
    $html = ob_get_contents();
    // ob_end_flush();
    ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en','true','utf-8',array(10,1,20,25));
    $pdf->WriteHTML($html);
    $pdf->Output('nilai.pdf', 'I');
  }

}