<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

	public function getUltimoRegistro($location)
	{
    $query = $this->db->query("select * from (select * from currently_data where currently_data.sid = '$location' order by id limit 1) _cd join (select * from currently_api where currently_api.sid = '$location' order by id limit 1) _ca on _cd.sid = _ca.sid order by _ca.id, _cd.id desc limit 1 ");
    if ($query->num_rows() > 0)
    {
      return $query;
    }
    else
    {
      return false;
    }
	}
  public function getUltimoDailyPred($location)
  {
    $query = $this->db->query("select * from daily_pred as dp where dp.sid = '$location' order by dp.id desc limit 1");
    if ($query->num_rows() > 0)
    {
      return $query;
    }
    else
    {
      return false;
    }
  }
  public function getUltimoWeeklyPred($location)
  {
    $query = $this->db->query("select * from weekly_pred as dp where dp.sid = '$location' order by dp.id desc limit 1");
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
