<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noticia extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->helper('rutas_helper');
		$this->load->model('noticia_model');
	}

	public function index($id)
	{
		$datos['noticia'] = $this->noticia_model->getNoticia($id);
		$this->load->view('templates/header.html');
		$this->load->view('templates/navbar.html');
		$this->load->view('noticia.html',$datos);
		$this->load->view('templates/footer.html');
	}

}
?>
