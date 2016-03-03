<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

	public function getUltimoRegistro()
	{
    $query = $this->db->query("select * from currently_data as cd, currently_api as ca order by cd.data and ca.data desc limit 1");
    if ($query->num_rows() > 0)
    {
    return $query;
    }
    else
    {
      return false;
    }
	}

}
?>
