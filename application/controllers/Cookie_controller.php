<?php
defined('BASEPATH') OR exist('no directory allowed');
class Cookie_controller extends CI_Controller {

 function __conxtruct(){
	parent::__construct();
 	$this->load->helper(array('cookie','url'));//El helper no está funcionando 
	$this->load->library('cookie');
 }

 public function index(){
        $this->input->set_cookie('nombre_cookie','valor_de_cookie', '600');// con helper set_cookie(....);
	$this->load->view('Cookie_view');
 }
	
 public function display_cookie(){
	echo $this->input->cookie('nombre_cookie');//con el helper get_cookie('nombre_cookie');
	$this->load->view('Cookie_view');
 }

 public function deletecookie(){
	delete_cookie('nombre_cookie');
	redirect('cookie/display');
 } 
}
