<?php
class m_mahasiswa extends CI_Model {

  public function getDropdownMhs($data){
    $sql = "select distinct m.nama_matkul, m.id_matkul from mata_kuliah m join log_mahasiswa l
            on m.id_matkul=l.id_matkul where l.nip = '$data'";
    $query = $this->db->query($sql, $data);
    return $query->result_array();
  }

  public function getDropdownKls($data){
    $sql = "select distinct k.nama_kelas, k.id_kelas from log_mahasiswa l JOIN kelas k
            ON l.id_kelas=k.id_kelas where l.nip = '$data[nip]' AND l.id_matkul = '$data[id_matkul]'";
    $query = $this->db->query($sql, $data);

    $output ="<option value='' selected disabled>Pilih Kelas</option>";
    foreach ($query->result_array() as $row) {
      $output .= "<option value='".$row['id_kelas']."'>".$row['nama_kelas']."</option>";
    }
    return $output;
  }

  public function getDaftarMhs($data){
    $sql = "SELECT m.nama, l.npm, COUNT(CASE WHEN keterangan = 'Hadir' THEN 1 END) /
    COUNT(l.keterangan) * 100 AS persentase FROM mahasiswa m JOIN log_mahasiswa l
    ON l.npm = m.npm WHERE l.nip = '$data[nip]' AND l.id_matkul = '$data[id_matkul]'
    AND l.id_kelas = '$data[id_kelas]' GROUP BY l.npm";
    $query = $this->db->query($sql, $data);
    return $query->result_array();
  }


}
