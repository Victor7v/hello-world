<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Holamundo extends CI_Controller {

	public function index()
	{
		$this->load->model('Usuario');
		
		if(!isset($_POST['mailUs']))
			$this->load->view('Holamundo');
		else {
			if($this->Usuario->existeEmail($_POST['mailUs'])){
				redirect(base_url().'index.php/Bienvenida');
			} else {
				$data['error'] = "Email o password incorrectos";
				$this->load->view('Holamundo',$data);
			}
		 } 
	}//index

	public function insertar($mail=null, $contrasena=null)
	{
		if($mail!=null && $contrasena!=null)
		{
			$datos =array( 'emailUsuario' => $mail ,'contrasenaUsuario' => $contrasena );
			$this->Usuario->inserta_usuario($datos);
			redirect(base_url());
		}
		else
		{	
			redirect(base_url());
		}
	}
}

