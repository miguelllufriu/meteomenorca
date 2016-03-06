<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
    $this->load->model('home_model');
	}

	public function index()
	{
		$datos['datosPrincipales'] = $this->home_model->getUltimoRegistro();
		$datos['ultimaPredDiaria'] = $this->home_model->getUltimoDailyPred();
		$datos['ultimaPredSem'] = $this->home_model->getUltimoWeeklyPred();
		$this->load->view('templates/header.html');
		$this->load->view('templates/navbar.html');
		$this->load->view('home.html',$datos);
		$this->load->view('templates/footer.html');
	}
}
?>
