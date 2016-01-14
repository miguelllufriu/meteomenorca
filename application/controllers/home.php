<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->model('homeData_model');
	}

	public function index()
	{
		$datos['datosPrincipales'] = $this->homeData_model->getUltimoRegistro();
		$this->load->view('templates/header.html');
		$this->load->view('home.html',$datos);
		$this->load->view('templates/footer.html');
	}
}
?>
