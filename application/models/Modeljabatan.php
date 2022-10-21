<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modeljabatan extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('tbl_jabatan')->result_array(); //banyak data kepanggil ya select * from
	}


	public function tambah_data_jabatan() // ini lari ke kontroler
	{
		$data =[
			"kd_jabatan"=> $this->input->post('kd'), // ini ada di name inputan
			"jabatan"=> $this->input->post('jabatan'), // ini ada di name inputan
		];
		$this->db->insert('tbl_jabatan', $data); // ini query masukin ke database atau query insert
		return $this->db->affected_rows();
	}

	public function hapus_data ($id) // buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		$this->db->where('id', $id); // cari nama id lalu lakukan ambil id 
		$this->db->delete('tbl_jabatan'); // lalu delete data id yang adan di tbl_blok
	}

	public function ambil_id_jabatan($id) //buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		return $this->db->get_where('tbl_jabatan', ['id' => $id]) //pengambilan data dari database ambil ID
		->row_array();
	}

	public function proses_edit_jabatan() // menjadi function di ctrl
	{
		$data =[
			"kd_jabatan"=> $this->input->post('kd'),
			"jabatan"=> $this->input->post('jabatan'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_jabatan', $data);
	}


	
}