<?php
class m_absensi extends CI_Model {

  public function getAbsensi($data){
    $sql = "select tgl, keterangan from log_staf where nip = '$data'";
    $query = $this->db->query($sql, $data);
    return $query->result_array();
  }

}
