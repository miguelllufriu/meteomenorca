<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Meteoadmin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->helper('rutas_helper');
		$this->load->model('meteoadmin_model');


	}

	public function index()
	{
		$this->load->view('templates/header.html');
		$this->load->view('templates/navbar.html');
		$this->load->view('meteoadmin.html');
		$this->load->view('templates/footer.html');
	}
  public function newNotice()
  {

  }

}
?>
