<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

  public function index()

  {
    $data['tbl_jabatan'] = $this->modeljabatan->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('jabatan', $data);
    $this->load->view('tamplate/footer'); 
  }

  public function tambah_data()
	{
		$data['tbl_jabatan'] = $this->modeljabatan->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_jabatan', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_jabatan() // ini ambil dari nama model
	{
		$insert = $this->modeljabatan->tambah_data_jabatan(); // ini ambil dari fuction model
		// redirect('jabatan'); //ini kembali ke view
		if ($insert > 0){
			echo json_encode(['code' => 200, 'message' => 'Data Anda Berhasil Di Simpan']);
		}else{
			echo json_encode(['code' => 200, 'message' => 'Data Anda Gagal Di Simpan']);
		}
	}

	public function hapus_data($id) // fungsi hapus data mengambil ID 
	{
		$this->modeljabatan->hapus_data ($id);// lihat di model lalu lakukan fuction hapus data
		redirect('jabatan'); // kembali ke view
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
	//redirect('jabatan');
	}

	//kabupaten
	
}
?>