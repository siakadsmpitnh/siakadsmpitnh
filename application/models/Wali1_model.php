<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Wali1_model extends CI_Model 
	{
		public function data_guru()
		{
			$data = $this->db->query("SELECT guru.*, kelas.Nama_Kelas from guru join kelas on guru.Nama_Guru=kelas.Nama_Wali where guru.level='3' AND guru.status='1' Order by kelas.Nama_Kelas ASC")->result();
			return $data;
		}

		public function edit_guru($id)
		{
			$data = $this->db->query("SELECT guru.*, kelas.Nama_Kelas from guru join kelas on guru.Nama_Guru=kelas.Nama_Wali where Id_Guru=".$id)->row();
			return $data;
		}

		public function cek($Nama_Guru)
		{
			$data = $this->db->query("SELECT COUNT(Nama_Guru) as b FROM guru WHERE Nama_Guru='$Nama_Guru' AND status='1' AND level='3'")->row();
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
