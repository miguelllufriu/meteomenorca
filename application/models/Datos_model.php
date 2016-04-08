<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datos_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

	public function get2UltimasHoras()
	{
    if (!isset($_COOKIE['location'])){
      $location = "CIU001";
    }else{
      $location = get_cookie("location");
    }
    $query = $this->db->query("SELECT * FROM `currently_data` WHERE sid = '$location' ORDER BY data DESC LIMIT 24");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
	}

}
?>
