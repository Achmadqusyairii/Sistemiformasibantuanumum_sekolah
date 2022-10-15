<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

  public function index()

  {
    $data['tbl_siswa'] = $this->Modelsiswa->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('siswa', $data);
    $this->load->view('tamplate/footer'); 
  }

  public function tambah_data()
	{
		$data['tbl_siswa'] = $this->Modelsiswa->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_siswa', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_siswa() // ini ambil dari nama model
	{
		$this->Modelsiswa->tambah_data_siswa(); // ini ambil dari fuction model
		redirect('siswa'); //ini kembali ke view
	}

	public function hapus_data($id) // fungsi hapus data mengambil ID 
	{
		$this->Modelsiswa->hapus_data_siswa ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('siswa'); // kembali ke view
	}
	public function edit_data ($id)
	{
		$data['tbl_siswa']=$this->Modelsiswa->ambil_id_siswa($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_siswa', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_siswa ()
	{
	$this -> Modelsiswa->proses_edit_siswa();
	redirect('siswa');
	}

	//kabupaten
	
}
?>