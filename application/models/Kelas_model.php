<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Kelas_model extends CI_Model 
	{
		public function data_kelas()
		{
			$data = $this->db->query("SELECT * from kelas WHERE status='1' Order by Id_Kelas desc")->result();
			return $data;
		}

		public function get_kelas($id)
		{
			$data = $this->db->query("SELECT * from kelas Where Id_Kelas=".$id)->row();
			return $data;
		}

		public function get_guru()
		{
			$data = $this->db->query("SELECT * from guru where level!='1' Order by Id_Guru desc")->result();
			return $data;
		}

		public function get_walinya()
		{
			$data = $this->db->query("SELECT * from kelas Order by Id_Kelas desc")->result();
			return $data;
		}

		public function data_siswa_kelas($id)
		{
			$data = $this->db->query("SELECT c.Nama_Siswa,c.NIPD FROM kelas a JOIN kelassiswa b on a.Nama_Kelas=b.Kelas_Siswa JOIN siswa c on c.NIPD=b.Nama_Siswa where a.Id_Kelas=".$id)->result();
			return $data;
		}

		public function Simpan($table, $data)
		{
			return $this->db->insert($table, $data);
		}

		function update($where,$data,$table)
		{
	  		$this->db->where($where);
	  		$this->db->update($table,$data);
	 	} 

		function edit($table,$data,$where)
		{  
	 		return $this->db->get_where($table,$data,$where);
		}

		public function Hapus($table,$where){
			return $this->db->delete($table,$where);
		}
	}
