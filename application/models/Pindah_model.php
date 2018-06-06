<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pindah_model extends CI_Model 
	{
		public function data_kelas()
		{
			$data = $this->db->query("SELECT * from kelas WHERE status='1' Order by Id_Kelas ASC")->result();
			return $data;
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
