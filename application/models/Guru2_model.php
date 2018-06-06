<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Guru2_model extends CI_Model 
	{
		public function data_kelas_guru($nama)
		{
			$data = $this->db->query("SELECT kelasguru.*, kelas.Id_Kelas, guru.Id_Guru, mapel.Id_Mapel FROM kelasguru JOIN kelas on kelasguru.Nama_Kelas=kelas.Nama_Kelas JOIN guru on kelasguru.Nama_Guru=guru.Nama_Guru JOIN mapel on kelasguru.Nama_Mapel=mapel.Nama_Mapel WHERE kelasguru.Nama_Guru='$nama'  Order by Id_Kelas_Guru desc")->result();
			return $data;
		}

		public function data_nh($kelas, $mapel, $nama, $tahun_nya)
		{
			$data = $this->db->query("SELECT nilai.*, siswa.Nama_Siswa FROM nilai join siswa on nilai.NIPD=siswa.NIPD WHERE Nama_Kelas ='$kelas' AND Nama_Mapel='$mapel' AND Nama_Guru='$nama' AND Tahun_Akademik='$tahun_nya' AND nilai.status='1'")->result();
			return $data;
		}

		public function get_kelas($kelas)
		{
			$data = $this->db->query("SELECT * From kelas where Id_Kelas='$kelas'")->row();
			return $data;
		}

		public function get_mapel($mapel)
		{
			$data = $this->db->query("SELECT * From mapel where Id_Mapel='$mapel'")->row();
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
