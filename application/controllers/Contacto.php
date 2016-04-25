<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->helper('form');
		$this->load->library(array('session', 'form_validation'));
	}

	public function index()
	{
		$this->load->view('templates/header.html');
		$this->load->view('templates/navbar.html');
    $this->load->view('contacto.html');
		$this->load->view('templates/footer.html');

	 }

	 public function sendForm()
	 {
 		$this->form_validation->set_rules('nombre', 'Name', 'trim|required');
 		$this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
 		$this->form_validation->set_rules('contenido', 'Subject', 'trim|required');

 			 if ($this->form_validation->run() == FALSE)
 			 {
 					 echo "ERROR.";
 			 }
 			 else
 			 {
					$name = $this->input->post('nombre');
					$from_email = $this->input->post('email');
					$message = $this->input->post('contenido');

					$to_email = 'contacto@meteomenorca.es';

					$config['protocol'] = 'smtp';
					$config['smtp_host'] = 'smtp.1and1.es';
					$config['smtp_port'] = '587';
					$config['smtp_user'] = '';
					$config['smtp_pass'] = '';
					$config['mailtype'] = 'html';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;
					$config['newline'] = "\r\n";
					$this->load->library('email', $config);

					$this->email->from($from_email, $name);
					$this->email->to($to_email);
					$this->email->subject("Contacto desde formulario de Meteomenorca.");
					$this->email->message($message);
					if ($this->email->send())
					{
							redirect('contacto/index');
					}
					else
					{
							echo "Error.";
					}
 			 }
	 }
}
?>
