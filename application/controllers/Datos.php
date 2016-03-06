<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->model('datos_model');
	}

	public function index()
	{
		$datos['ultimas2Horas'] = $this->datos_model->get2UltimasHoras();
		$this->load->view('templates/header.html');
		$this->load->view('templates/navbar.html');
		$this->load->view('datos.html',$datos);
		$this->load->view('templates/footerCharts.html');
	}
}
?>
