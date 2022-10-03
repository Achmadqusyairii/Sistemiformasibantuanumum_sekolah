<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelguru extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('tbl_guru')->result_array(); //banyak data kepanggil ya select * from
	}


	public function tambah_data_guru() // ini lari ke kontroler
	{
		$data =[
			"kd_guru"=> $this->input->post('kd_guru'), // ini ada di name inputan
			"nip"=> $this->input->post('nip'), // ini ada di name inputan
			"nama"=> $this->input->post('nama'), // ini ada di name inputan
			"kd_jabatan"=> $this->input->post('kd_jabatan'), // ini ada di name inputan
			"kd_mapel"=> $this->input->post('kd_mapel'), // ini ada di name inputan
		];
		$this->db->insert('tbl_guru', $data); // ini query masukin ke database atau query insert
	}

	public function hapus_data ($id) // buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		$this->db->where('id', $id); // cari nama id lalu lakukan ambil id 
		$this->db->delete('tbl_mapel'); // lalu delete data id yang adan di tbl_blok
	}

	public function ambil_id_mapel($id) //buat funcion yang nanti di panggi di ctrl dan ambil id
	{
		return $this->db->get_where('tbl_mapel', ['id' => $id]) //pengambilan data dari database ambil ID
		->row_array();
	}

	public function proses_edit_mapel() // menjadi function di ctrl
	{
		$data =[
			"kd_mapel"=> $this->input->post('kd'),
			"nm_mapel"=> $this->input->post('mapel'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_mapel', $data);
	}

	//kabupaten
	

	
}