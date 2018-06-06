<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Akademik_model extends CI_Model 
	{
		public function data_akademik()
		{
			$data = $this->db->query("SELECT * from akademik Order by Id_Akademik desc")->result();
			return $data;
		}

		public function ambil_status($id)
		{
			$data = $this->db->query("SELECT * from akademik Where Id_Akademik='$id'")->row();
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
