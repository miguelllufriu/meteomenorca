<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        		$this->load->model('meteoadmin_model');
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->load->library(array('ion_auth','form_validation'));
    }

    function index() {
      if (!$this->ion_auth->logged_in())
      {
        redirect('auth/login', 'refresh');
      }
      elseif (!$this->ion_auth->is_admin())
      {
        return show_error('You must be an administrator to view this page.');
      }else{
        $this->load->view('templates/header.html');
        $this->load->view('templates/navbar.html');
        $this->load->view('meteoadmin.html');
        $this->load->view('templates/footer.html');
      }
    }


    function do_upload() {
      if (!$this->ion_auth->logged_in())
      {
        redirect('auth/login', 'refresh');
      }
      elseif (!$this->ion_auth->is_admin())
      {
        return show_error('You must be an administrator to view this page.');
      }else{
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('author', 'Autor', 'required|min_length[3]|max_length[255]|trim');
            $this->form_validation->set_rules('title', 'Titulo', 'required|min_length[3]|max_length[255]|trim');
            $this->form_validation->set_rules('contenido', 'Cuerpo', 'required|min_length[3]|max_length[255]|trim');
            $this->form_validation->set_rules('imageTitle', 'TituloImagen', 'required|min_length[3]|max_length[255]|trim');
            $this->form_validation->set_message('required', 'El campo no puede ir vacío!');
            $this->form_validation->set_message('min_length', 'El campo debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El campo no puede tener más de %s carácteres');

            if ($this->form_validation->run() == TRUE)
            {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('meteoadmin.html', $error);
            } else {
                  $file_info = $this->upload->data();
                  $this->_create_thumbnail($file_info['file_name']);
                  $data = array('upload_data' => $this->upload->data());
                  $autor = $this->input->post('author');
                  $titulo = $this->input->post('title');
                  $imagen = $file_info['file_name'];
                  $tituloImagen = $this->input->post('imageTitle');
                  $contenido = $this->input->post('contenido');
                  $subir = $this->meteoadmin_model->uploadNewNotice($autor,$titulo,$contenido,$tituloImagen,$imagen);
                  $data['titulo'] = $titulo;
                  $data['imagen'] = $imagen;
                  $this->load->view('meteoadmin.html', $data);
              }
            }else{
                  $this->index();
              }
        }
    }

    function _create_thumbnail($filename){
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/'.$filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='uploads/thumbs/';
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }
}
