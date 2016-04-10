<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Meteoadmin_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function uploadNewNotice($author, $title, $body, $imageTitle, $file){
    $query = $this->db->query("insert into notices (date,author,imageTitle,imagePath,title,body) values (NOW(),'$author','$imageTitle','$file','$title','$body')");
    return $query;
  }
}
?>
