<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelsiswa extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('tbl_siswa')->result_array(); //banyak data kepanggil ya select * from
	}


	public function tambah_data_siswa() // ini lari ke kontroler
	{
		$data =[
			"kd_siswa"=> $this->input->post('kd_siswa'), // ini ada di name inputan
			"nisn"=> $this->input->post('nisn'), // ini ada di name inputan
			"nis"=> $this->input->post('nis'), // ini ada di name inputan
			"nm_siswa"=> $this->input->post('nm_siswa'), // ini ada di name inputan
			"kode_kelas"=> $this->input->post('kode_kelas'), // ini ada di name inputan
		];
		$this->db->insert('tbl_siswa', $data); // ini query masukin ke database atau query insert
	}

	public function hapus_data_siswa ($id) // buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		$this->db->where('id', $id); // cari nama id lalu lakukan ambil id 
		$this->db->delete('tbl_siswa'); // lalu delete data id yang adan di tbl_blok
	}

	public function ambil_id_siswa($id) //buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		return $this->db->get_where('tbl_siswa', ['id' => $id]) //pengambilan data dari database ambil ID
		->row_array();
	}

	public function proses_edit_siswa() // menjadi function di ctrl
	{
		$data =[
			"kd_siswa"=> $this->input->post('kd_siswa'), // ini ada di name inputan
			"nisn"=> $this->input->post('nisn'), // ini ada di name inputan
			"nis"=> $this->input->post('nis'), // ini ada di name inputan
			"nm_siswa"=> $this->input->post('nm_siswa'), // ini ada di name inputan
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_siswa', $data);
	}

	//kabupaten
	

	
}