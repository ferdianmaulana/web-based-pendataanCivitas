<?php
class m_tambahUser extends CI_Model {

  public function insertUser($data){
    $sql = "insert into staf (nip, nama, jenis_kelamin, alamat, tgl_lahir, role, password)
            values ('$data[nip]','$data[nama]','$data[jk]','$data[alamat]','$data[ttl]', '$data[role]', '$data[password]')";
    $this->db->query($sql, $data);
  }

  public function checkNIP($data){
    $sql = "select count(nip) as jmlh from staf where nip = '$data[nip]'";
    $query = $this->db->query($sql, $data);
    return $query->result_array();
  }

}
