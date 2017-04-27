<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Holamundo extends CI_Controller {

	
	public function index()
	{		
	$this->load->model('Usuario');
		if(!isset($_POST['mailUs'])){
			$this->load->view('Holamundo');
		} else {
			if($this->Usuario->existeEmail($_POST['mailUs'])){
				//redirect(base_url().'index.php/Bienvenida');
				$this->load->view('principal');
			} else {
				$data['error'] = "Email o password incorrectos";
				$this->load->view('Holamundo',$data);
			}
		 } 
	}//index

	public function insertar()
	{	
	$this->load->model('Usuario');
		//$this->load->helper('form');
		//$this->load->View('insertar');

		if((!isset($_POST['email'])) && (!isset($_POST['paswd']))){
			$this->load->helper('form');
			$this->load->View('insertar');		
		} else {			
			if($_POST['email'] != null && $_POST['paswd'] != null && $_POST['usuario'] != null ){
				echo $_POST['email'].$_POST['paswd']; 
				$datos = array( 
					'nombreUsuario' => $_POST['usuario'],
					'contrasenaUsuario' => $_POST['paswd'],
					'emailUsuario' => $_POST['email']
				);
				$this->Usuario->inserta_usuario($datos);
				redirect(base_url().'index.php/Bienvenida');
			} else {	
				redirect(base_url());
			}
		}		
	}

}
