<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Point extends CI_Controller {

  public function index()

  {
    $data['tbl_point'] = $this->modelpoint->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('point', $data);
    $this->load->view('tamplate/footer'); 
  }

  public function tambah_data()
	{
		$data['tbl_point'] = $this->modelpoint->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_point', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_point() // ini ambil dari nama model
	{
		$this->modelpoint->tambah_data_point(); // ini ambil dari fuction model
		redirect('point'); //ini kembali ke view
	}

	public function hapus_data($id) // fungsi hapus data mengambil ID 
	{
		$this->modelpoint->hapus_data_point ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('point'); // kembali ke view
	}
	public function edit_data ($id)
	{
		$data['tbl_point']=$this->modelpoint->ambil_id_point($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_point', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_point ()
	{
	$this -> modelpoint->proses_edit_point();
	redirect('point');
	}

	//kabupaten
	
}
?>