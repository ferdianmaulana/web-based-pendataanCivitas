<?php
class m_profil extends CI_Model {

  public function getProfil($data){
    $sql = "select nip, nama, jenis_kelamin, alamat, tgl_lahir from staf where nip = '$data'";
    $query = $this->db->query($sql, $data);
    return $query->result_array();
  }

}
