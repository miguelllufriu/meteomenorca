<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

	public function getUltimoRegistro()
	{
    if (!isset($_COOKIE['location'])){
      $location = "CIU001";
    }else{
      $location = get_cookie("location");
    }
    $query = $this->db->query("select * from currently_data as cd, currently_api as ca where cd.sid = '$location' and ca.sid = '$location' order by cd.data desc, ca.data desc limit 1");
    if ($query->num_rows() > 0)
    {
      return $query;
    }
    else
    {
      return false;
    }
	}
  public function getUltimoDailyPred()
  {
    if (!isset($_COOKIE['location'])){
      $location = "CIU001";
    }else{
      $location = get_cookie("location");
    }
    $query = $this->db->query("select * from daily_pred as dp where dp.sid = '$location' order by dp.data desc limit 1");
    if ($query->num_rows() > 0)
    {
      return $query;
    }
    else
    {
      return false;
    }
  }
  public function getUltimoWeeklyPred()
  {
    if (!isset($_COOKIE['location'])){
      $location = "CIU001";
    }else{
      $location = get_cookie("location");
    }
    $query = $this->db->query("select * from weekly_pred as dp where dp.sid = '$location' order by dp.data desc limit 1");
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
