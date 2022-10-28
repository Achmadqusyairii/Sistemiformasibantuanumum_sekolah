<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_autocomplete extends CI_Controller {
    public function index()//

  {
 
    $this->load->view('v_autocomplete');
  }

  function get_autocomplete()
  {
    if (isset($_GET['term'])) {
      $result = $this->m_auto->get_prov($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
        $result_array[] = array(
            'label'=>$row->nisn,
            'nama_mahasiswa'=>strtoupper($row->nm_siswa)
          );
        echo json_encode($result_array);
      }
    }
  }

    
}
?>