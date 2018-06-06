<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Kelas_Guru_model extends CI_Model 
	{
		public function data_kelas()
		{
			$data = $this->db->query("SELECT * from kelas WHERE status='1'")->result();
			return $data;
		}

		public function data_kelas_guru()
		{
			$data = $this->db->query("SELECT * from kelasguru WHERE status='1' ORDER BY Id_Kelas_Guru DESC")->result();
			return $data;
		}

		public function data_pelajaran()
		{
			$data = $this->db->query("SELECT * from mapel WHERE status='1'")->result();
			return $data;
		}

		public function data_guru()
		{
			$data = $this->db->query("SELECT * from guru WHERE status='1'")->result();
			return $data;
		}

		public function data_kelas_siswa()
		{
			$data = $this->db->query("SELECT a.*, (b.Nama_Siswa) as nama, b.Id_Siswa,(b.NIPD) as nip from kelassiswa a join siswa b on a.Nama_Siswa=b.NIPD WHERE b.kondisi=1 AND a.Kelas_Siswa>=1 order by a.Id_Kelas_Siswa desc")->result();
			return $data;
		}

		public function data_siswa()
		{
			$data = $this->db->query("SELECT a.Nama_Siswa,a.NIPD FROM siswa a join kelassiswa b on a.NIPD=b.Nama_Siswa WHERE b.Kelas_Siswa=0 AND a.kondisi=1")->result();
			return $data;
		}

		public function get_kelas($id)
		{
			$data = $this->db->query("SELECT * from kelas Where Id_Kelas=".$id)->row();
			return $data;
		}

		public function get_guru()
		{
			$data = $this->db->query("SELECT * from guru where level!='1' Order by Id_Guru desc")->result();
			return $data;
		}

		public function data_siswa_kelas($id)
		{
			$data = $this->db->query("SELECT c.Nama_Siswa,c.NIPD FROM kelas a JOIN kelassiswa b on a.Nama_Kelas=b.Kelas_Siswa JOIN siswa c on c.NIPD=b.Nama_Siswa where a.Id_Kelas=".$id)->result();
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
