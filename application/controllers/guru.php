<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

  public function index()

  {
    $data['tbl_guru'] = $this->modelguru->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('guru', $data);
    $this->load->view('tamplate/footer'); 
  }

  public function tambah_data()
	{
		$data['tbl_guru'] = $this->modelguru->SemuaData();
		$data['tbl_jabatan'] = $this->modeljabatan->SemuaData('tbl_jabatan');
    	$data['tbl_mapel'] = $this->modelMapel->SemuaData('tbl_mapel');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_guru', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_guru() // ini ambil dari nama model
	{
		$this->modelguru->tambah_data_guru(); // ini ambil dari fuction model
		redirect('guru'); //ini kembali ke view
	}

	public function hapus_data_guru($id) // fungsi hapus data mengambil ID 
	{
		$this->modelguru->hapus_data_guru ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('guru'); // kembali ke view
	}
	public function edit_data ($id)
	{
		$data['tbl_jabatan']=$this->modeljabatan->ambil_id_jabatan($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_jabatan', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_jabatan ()
	{
	$this -> modeljabatan->proses_edit_jabatan();
	redirect('jabatan');
	}

	//kabupaten
	
}
?>