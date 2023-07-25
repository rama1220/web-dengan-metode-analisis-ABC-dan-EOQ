<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

  public function checklogin($username, $password)
  {
    return $this->db->query("SELECT * FROM user WHERE  username='$username' AND  password='$password'")->result();
  }
}
