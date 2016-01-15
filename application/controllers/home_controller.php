<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('user_agent');
    $this->load->model('home_model');
	}

	public function index()
	{
		$datos['datosPrincipales'] = $this->home_model->getUltimoRegistro();
		$this->load->view('templates/header.html');
		$this->load->view('home.html',$datos);
		$this->load->view('templates/footer.html');
	}
}
?>
