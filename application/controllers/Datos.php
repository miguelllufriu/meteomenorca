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
		if (!isset($_COOKIE['location'])){
			$location = "CIU001";
		}else{
			$location = get_cookie("location");
		}
		if (!isset($_COOKIE['time'])){
			$time = "2hrs";
		}else{
			$time = get_cookie("time");
		}

		switch ($time) {
			case '2hrs':
					$datos['datos'] = $this->datos_model->get2UltimasHoras($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datos.html',$datos);
					$this->load->view('templates/footerCharts.html');
					break;
			case '12hrs':
					$datos['datosHistoricos'] = $this->datos_model->get12UltimasHoras($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datosHistoricosDia.html',$datos);
					$this->load->view('templates/footerCharts.html');
					break;
			case '1dia':
					$datos['datosHistoricos'] = $this->datos_model->get1Dia($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datosHistoricosDia.html',$datos);
					$this->load->view('templates/footerCharts.html');
			break;
			case '1semana':
					$datos['datosHistoricos'] = $this->datos_model->get1Semana($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datosHistoricos.html',$datos);
					$this->load->view('templates/footerCharts.html');
			break;
			case '1mes':
					$datos['datosHistoricos'] = $this->datos_model->get1Mes($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datosHistoricos.html',$datos);
					$this->load->view('templates/footerCharts.html');
			break;
			case '6meses':
					$datos['datosHistoricos'] = $this->datos_model->get6Meses($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datosHistoricos.html',$datos);
					$this->load->view('templates/footerCharts.html');
			break;
			case '1ano':
					$datos['datosHistoricos'] = $this->datos_model->get1Ano($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datosHistoricos.html',$datos);
					$this->load->view('templates/footerCharts.html');
			break;
			case '2anos':
					$datos['datosHistoricos'] = $this->datos_model->get2Anos($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datosHistoricos.html',$datos);
					$this->load->view('templates/footerCharts.html');
			break;
			default:
					$datos['datos'] = $this->datos_model->get2UltimasHoras($location);
					$this->load->view('templates/header.html');
					$this->load->view('templates/navbar.html');
					$this->load->view('datos.html',$datos);
					$this->load->view('templates/footerCharts.html');
				break;
		}
	}
}
?>
