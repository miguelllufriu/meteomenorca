<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datos_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

	public function get2UltimasHoras($location)
	{
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

  public function get12UltimasHoras($location)
  {
    $query = $this->db->query("SELECT * FROM `beta_avg1h_data` WHERE sid = '$location' ORDER BY time DESC LIMIT 12");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function get1Dia($location)
  {
    $query = $this->db->query("SELECT * FROM `beta_avg1h_data` WHERE sid = '$location' ORDER BY time DESC LIMIT 24");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function get1Semana($location)
  {
    $query = $this->db->query("SELECT * FROM `beta_avg12h_data` WHERE sid = '$location' ORDER BY time DESC LIMIT 14");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function get1Mes($location)
  {
    $query = $this->db->query("SELECT * FROM `beta_avg24h_data` WHERE sid = '$location' ORDER BY time DESC LIMIT 30");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function get6Meses($location)
  {
    $query = $this->db->query("SELECT * FROM `beta_avgmonth_data` WHERE sid = '$location' ORDER BY time DESC LIMIT 6");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function get1Ano($location)
  {
    $query = $this->db->query("SELECT * FROM `beta_avgmonth_data` WHERE sid = '$location' ORDER BY time DESC LIMIT 12");
    if ($query->num_rows() > 0)
    {
    return $query->result();
    }
    else
    {
      return false;
    }
  }
  public function get2Anos($location)
  {
    $query = $this->db->query("SELECT * FROM `beta_avgmonth_data` WHERE sid = '$location' ORDER BY time DESC LIMIT 24");
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
