<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datos_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

	public function getTempUltimoDia()
	{
    $query = $this->db->query("SELECT data,temp FROM `currently_data` ORDER BY data DESC LIMIT 24");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
	}
  public function getVientoUltimoDia()
  {
    $query = $this->db->query("SELECT data,viento FROM `currently_data` ORDER BY data DESC LIMIT 24");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }
  public function getDirUltimoDia()
  {
    $query = $this->db->query("SELECT data,dirViento FROM `currently_data` ORDER BY data DESC LIMIT 24");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }
  public function getPresionUltimoDia()
  {
    $query = $this->db->query("SELECT data,presion FROM `currently_data` ORDER BY data DESC LIMIT 24");
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
