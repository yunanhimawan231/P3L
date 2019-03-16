<?php
class home_model extends CI_Model{
 
  function validate_user($username,$password)
  {
    $this->db->where('USERNAME',$username);
    $this->db->where('PASSWORD',$password);
    $result_user = $this->db->get('TBL_PEGAWAI',1);
    return $result_user;
  }

  function validate_user_role($id_role)
  {
    $this->db->where('ID_ROLE',$id_role);
    $result_user_role = $this->db->get('TBL_ROLE',1);

    return $result_user_role;
  }
 
}