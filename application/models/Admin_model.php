<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin_model extends CI_Model 
	{
		public function data_admin()
		{
			$data = $this->db->query("SELECT * from guru where level='1' AND status='1' Order by Id_Guru desc")->result();
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
