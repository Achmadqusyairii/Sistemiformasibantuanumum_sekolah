<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

  public function index()

  {
    $data['tbl_mapel'] = $this->modelMapel->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('mapel', $data);
    $this->load->view('tamplate/footer'); 
  }

  public function tambah_data()
	{
		$data['tbl_mapel'] = $this->modelMapel->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_mapel', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_mapel() // ini ambil dari nama model
	{
		$this->modelMapel->tambah_data_mapel(); // ini ambil dari fuction model
		redirect('mapel'); //ini kembali ke view
	}

	public function hapus_data($id) // fungsi hapus data mengambil ID 
	{
		$this->modelMapel->hapus_data ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('mapel'); // kembali ke view
	}
	public function edit_data ($id)
	{
		$data['tbl_mapel']=$this->modelMapel->ambil_id_mapel($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_mapel', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_mapel ()
	{
	$this -> modelMapel->proses_edit_mapel();
	redirect('mapel');
	}

	//kabupaten
	
}
?>