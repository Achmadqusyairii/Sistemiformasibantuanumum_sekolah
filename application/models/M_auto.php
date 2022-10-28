<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_auto extends CI_Model 
{
  public function get_prov($title)
  {
    $this->db->like('nisn', $title, 'BOTH');
    $this->db->order_by('id', 'asc');
    $this->db->limit(10);
    return $this->db->get('tbl_siswa')->result();
  }

	
}