<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Wali_model extends CI_Model 
	{
		public function data_wali($id)
		{
			$data = $this->db->query("SELECT * from guru where Id_Guru='$id'")->row();
			return $data;
		}

		public function kelasnya($namanya)
		{
			$data = $this->db->query("SELECT * from kelas where Nama_Wali='$namanya'")->row();
			return $data;
		}

		public function siswa($nama_kelas, $tahun_nya)
		{
			$data = $this->db->query("SELECT nilai.*, siswa.Nama_Siswa from nilai join siswa on nilai.NIPD=siswa.NIPD where Nama_Kelas='$nama_kelas' group by NIPD")->result();
			return $data;
		}

		public function data_anak($nipd, $tahun_nya)
		{
			$data = $this->db->query("SELECT nilai.*, siswa.Nama_Siswa from nilai join siswa on nilai.NIPD=siswa.NIPD where nilai.NIPD='$nipd' AND Tahun_Akademik='$tahun_nya'")->result();
			return $data;
		}

		public function edit_guru($id)
		{
			$data = $this->db->query("SELECT * from guru where Id_Guru=".$id)->row();
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
