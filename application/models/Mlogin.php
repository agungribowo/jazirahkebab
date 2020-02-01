<?php
class Mlogin extends CI_Model{
    function cekadmin($u, $p){
    	$this->db->where('user_username',  $u);
    	$this->db->where('user_password', md5($p));
        // return $this->db->query('Select * FROM tbl_user WHERE user_username = "$u" AND user_password = "$p" ');
        return $this->db->get('tbl_user')->row_array();

    }
  
}
