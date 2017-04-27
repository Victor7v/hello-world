<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Login extends CI_Controller {
  

  public function __construct(){
      parent::__construct();
  }
		
  public function index(){
      
	$this->load->model('Usuario');
	$this->load->helper('url');		
	
	if(!isset($_POST['mailUs']) && !isset($_POST['pass'])){
		$this->load->view('Holamundo');
	} else {
		if($this->Usuario->comprobarLogin($_POST['mailUs'],$_POST['pass'])){
			redirect(base_url().'index.php/Bienvenida');
		} else {
			$data['error'] = "Email o password incorrectos";
			$this->load->view('Holamundo',$data);
		}
	 }
 
  }//index

}//Login
