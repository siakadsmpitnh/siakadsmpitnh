<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Bank_model extends CI_Model 
	{
		public function data_nilai()
		{
			$data = $this->db->query("SELECT nilai.*, siswa.Nama_Siswa from nilai join siswa on nilai.NIPD=siswa.NIPD where nilai.status='1' Order by Id_Nilai desc")->result();
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
