<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pointsiswa extends CI_Controller {

  public function index()

  {
    $data['tbl_point_siswa'] = $this->Modelpointsiswa->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('point_siswa', $data);
    $this->load->view('tamplate/footer'); 
  }

  public function tambah_data()
	{
		$data['tbl_point_siswa'] = $this->Modelpointsiswa->SemuaData();
		$data['tbl_siswa'] = $this->Modelsiswa->SemuaData('tbl_jabatan');
    	$data['tbl_point'] = $this->Modelpoint->SemuaData('tbl_point');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_point_siswa', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_point_siswa() // ini ambil dari nama model
	{
		$this->Modelpointsiswa->tambah_data_point_siswa(); // ini ambil dari fuction model
		redirect('pointsiswa'); //ini kembali ke view
	}

	public function hapus_data($id) // fungsi hapus data mengambil ID 
	{
		$this->Modelpoint->hapus_data_point ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('point'); // kembali ke view
	}
	public function edit_data ($id)
	{
		$data['tbl_point']=$this->Modelpoint->ambil_id_point($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_point', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_point ()
	{
	$this -> Modelpoint->proses_edit_point();
	redirect('point');
	}

	//kabupaten
	
}
?>