<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getNoticia($idNotice)
	{
    $query = $this->db->query("select * from notices where id = $idNotice");
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
