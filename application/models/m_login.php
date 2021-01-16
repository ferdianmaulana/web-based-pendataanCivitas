<?php
class m_login extends CI_Model {

  function validate_user(){

      $this->db->select('*');
      $this->db->from('staf');
      $this->db->where('nip', $this->input->post('nip'));
      $this->db->where('password', md5($this->input->post('password')));
      $this->db->limit(1);
      $query = $this->db->get();

      if($query->num_rows() == 1){
         return $query->result();
      }
      else{
          return false;
      }
  }

}
