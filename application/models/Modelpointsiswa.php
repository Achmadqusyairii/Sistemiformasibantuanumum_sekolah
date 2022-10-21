<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelpointsiswa extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('view_point_siswa')->result_array(); //banyak data kepanggil ya select * from
	}


	public function tambah_data_point_siswa() // ini lari ke kontroler
	{
		$data =[
			"kd_siswa"=> $this->input->post('kd_siswa'), // ini ada di name inputan
			"kd_point"=> $this->input->post('kd_point'), // ini ada di name inputan
			"keterangan"=> $this->input->post('keterangan'), // ini ada di name inputan
		];
		$this->db->insert('tbl_point_siswa', $data); // ini query masukin ke database atau query insert
	}

	public function hapus_data_point ($id) // buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		$this->db->where('id', $id); // cari nama id lalu lakukan ambil id 
		$this->db->delete('tbl_point'); // lalu delete data id yang adan di tbl_blok
	}

	public function ambil_id_point($id) //buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		return $this->db->get_where('tbl_point', ['id' => $id]) //pengambilan data dari database ambil ID
		->row_array();
	}

	public function proses_edit_point() // menjadi function di ctrl
	{
		$data =[
			"kd_point"=> $this->input->post('kd_point'),
			"nm_point"=> $this->input->post('nm_point'),
			"nilai_point"=> $this->input->post('nilai_point'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_point', $data);
	}


	public function detail_data($kd_siswa)
	{
		$this->db->where('kd_siswa', $kd_siswa);
		return $this->db->get("view_detail_point_siswa")->result_array();
	}

	
}