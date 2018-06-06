<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Siswa_model extends CI_Model 
	{
		public function data_Siswa()
		{
			$data = $this->db->query("SELECT * from siswa WHERE kondisi='1' Order by Id_Siswa desc")->result();
			return $data;
		}

		public function get_Siswa($id)
		{
			$data = $this->db->query("SELECT * from siswa Where Id_Siswa=".$id)->row();
			return $data;
		}

		public function data_tahun()
		{
			$data = $this->db->query("SELECT * from angkatan")->result();
			return $data;
		}

		public function get_Siswa_edit()
		{
			$data = $this->db->query("SELECT * from Siswa Order by Id_Siswa desc ")->result();
			return $data;
		}

		public function data_siswa_Siswa($id)
		{
			$data = $this->db->query("SELECT c.Nama_Siswa,c.NIPD FROM Siswa a JOIN Siswasiswa b on a.Nama_Siswa=b.Siswa_Siswa JOIN siswa c on c.NIPD=b.Nama_Siswa where a.Id_Siswa=".$id)->result();
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
