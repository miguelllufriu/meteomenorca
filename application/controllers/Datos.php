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
		$datos['tempUltimoDia'] = $this->datos_model->getTempUltimoDia();
		$datos['vientoUltimoDia'] = $this->datos_model->getVientoUltimoDia();
		$datos['dirVientoUltimoDia'] = $this->datos_model->getDirUltimoDia();
		$datos['presionUltimoDia'] = $this->datos_model->getPresionUltimoDia();
		$this->load->view('templates/header.html');
		$this->load->view('templates/navbar.html');
		$this->load->view('datos.html',$datos);
		$this->load->view('templates/footerCharts.html');
	}
}
?>
