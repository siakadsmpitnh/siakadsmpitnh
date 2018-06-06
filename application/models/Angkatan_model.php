<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Angkatan_model extends CI_Model 
	{
		public function data_angkatan()
		{
			$data = $this->db->query("SELECT * from angkatan WHERE status='1' Order by Id_Angkatan desc")->result();
			return $data;
		}

		public function get_tahun($id)
		{
			$data = $this->db->query("SELECT * from angkatan WHERE Id_Angkatan=".$id)->row();
			return $data;
		}

		public function get_siswa($id)
		{
			$data = $this->db->query("SELECT a.* from siswa a JOIN angkatan b ON a.Tahun_Angkatan=b.Tahun_Angkatan WHERE a.kondisi='1' AND Id_Angkatan=".$id." Order by a.NIPD desc")->result();
			return $data;
		}

		public function edit_angkatan($id)
		{
			$data = $this->db->query("SELECT * from angkatan where Id_Angkatan=".$id)->row();
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
