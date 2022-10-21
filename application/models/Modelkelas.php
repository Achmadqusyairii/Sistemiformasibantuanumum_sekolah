<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelkelas extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('tbl_kelas')->result_array(); //banyak data kepanggil ya select * from
	}


	public function tambah_data_kelas() // ini lari ke kontroler
	{
		$data =[
			"kode_kelas"=> $this->input->post('kd'), // ini ada di name inputan
			"nm_kelas"=> $this->input->post('kelas'), // ini ada di name inputan
		];
		$this->db->insert('tbl_kelas', $data); // ini query masukin ke database atau query insert
	}

	public function hapus_data ($id) // buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		$this->db->where('id', $id); // cari nama id lalu lakukan ambil id 
		$this->db->delete('tbl_kelas'); // lalu delete data id yang adan di tbl_blok
	}

	public function ambil_id_kelas($id)
	{
		return $this->db->get_where('tbl_kelas', ['id' => $id])
		->row_array();
	}

	public function proses_edit_kelas ()
	{
		$data =[
			"kode_kelas"=> $this->input->post('kd'),
			"nm_kelas"=> $this->input->post('kelas'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_kelas', $data);
	}

	//kabupaten
	

	
}