<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Input_model extends CI_Model 
	{
		public function data_kelas_guru()
		{
			$data = $this->db->query("SELECT kelasguru.*, guru.Id_Guru, kelas.Id_Kelas, mapel.Id_Mapel from kelasguru JOIN guru ON kelasguru.Nama_Guru=guru.Nama_Guru join kelas on kelasguru.Nama_Kelas=kelas.Nama_Kelas join mapel on mapel.Nama_Mapel=kelasguru.Nama_Mapel WHERE kelasguru.status='1' ORDER BY kelasguru.Id_Kelas_Guru DESC")->result();
			return $data;
		}

		public function data_kelasnya($kelas)
		{
			$data = $this->db->query("SELECT Nama_Kelas From Kelas WHERE Id_Kelas='$kelas'")->row();
			return $data;
		}

		public function nama_siswa($nipd)
		{
			$data = $this->db->query("SELECT Nama_Siswa From siswa WHERE NIPD='$nipd'")->row();
			return $data;
		}

		public function data_gurunya($guru)
		{
			$data = $this->db->query("SELECT Nama_Guru From guru WHERE Id_Guru='$guru'")->row();
			return $data;
		}

		public function data_mapel($mapel)
		{
			$data = $this->db->query("SELECT Nama_Mapel From mapel WHERE Id_Mapel='$mapel'")->row();
			return $data;
		}

		public function data_siswa($kelas)
		{
			$data = $this->db->query("SELECT * From kelassiswa,siswa WHERE Kelas_Siswa='$kelas' AND kelassiswa.Nama_Siswa=siswa.NIPD")->result();
			return $data;
		}

		public function data_edit($id)
		{
			$data = $this->db->query("SELECT nilai.*, siswa.Nama_Siswa From nilai join siswa on nilai.NIPD=siswa.NIPD where Id_Nilai='$id'")->row();
			return $data;
		}

		public function tahun_aktif()
		{
			$data = $this->db->query("SELECT * FROM akademik WHERE status = '1'")->row();
			return $data;
		}

		public function hitung()
		{
			$data = $this->db->query("SELECT COUNT(Tahun_Akademik) as b FROM akademik WHERE status = '1'")->row();
			return $data;
		}

		public function data_nilai($kelas)
		{
			$data = $this->db->query("SELECT nilai.*, siswa.Nama_Siswa FROM nilai join siswa on nilai.NIPD=siswa.NIPD WHERE Nama_Kelas ='$kelas' AND nilai.status='1'")->result();
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
