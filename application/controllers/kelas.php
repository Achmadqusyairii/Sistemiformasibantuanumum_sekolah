<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

  public function index()

  {
    $data['tbl_kelas'] = $this->Modelkelas->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('kelas', $data);
    $this->load->view('tamplate/footer'); 
  }
  public function tambah_data()
	{
		$data['tbl_kelas'] = $this->Modelkelas->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_kelas', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_kelas() // ini ambil dari nama model
	{
		$this->Modelkelas->tambah_data_kelas(); // ini ambil dari fuction model
		redirect('kelas'); //ini kembali ke view
	}

	public function hapus_data($id) // fungsi hapus data mengambil ID 
	{
		$this->Modelkelas->hapus_data ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('kelas'); // kembali ke view
	}
	public function edit_data ($id)
	{
		$data['tbl_kelas']=$this->Modelkelas->ambil_id_kelas($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_kelas', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_kelas ()
	{
	$this -> Modelkelas->proses_edit_kelas();
	redirect('kelas');
	}

	//kabupaten
	
}
?>