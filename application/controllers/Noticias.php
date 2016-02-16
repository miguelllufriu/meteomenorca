<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
	}

	public function index()
	{
		$this->load->view('templates/header.html');
		$this->load->view('templates/navbar.html');
		$this->load->view('noticias.html');
		$this->load->view('templates/footer.html');
	}
}
?>
