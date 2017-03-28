<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Holamundo extends CI_Controller {

	public function index()
	{
		$this->load->model('Usuario');
		
		if($this->Usuario->existeEmail('victor@7voz.com'))
			echo 'Existe el usuario: ';
		print_r( $this->Usuario->existeEmail('pedro@7voz.com'));
		if(!isset($_POST['mailUs']))
			$this->load->view('Holamundo');
		else {
			$this->form_validation->set_rules('mailUs','e-mail', 'required|valid_email');
			$this->form_validation->set_rules('paswd','password', 'required');
			if($this->form_validation->run==FALSE){
				$this->load->view('Holamundo');
			} else {
				$this->load->model('Usuario');
				if($this->Usuario->existeEmail($_POST['mailUs'])){
					redirect(base_url.'index.php/Bienvenida');
				} else {
					$data['error'] = "Email o password incorrectos";
					$this->load->view('Holamundo',$data);
				}
			}
		}
	}
}

