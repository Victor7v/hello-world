<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Holamundo extends CI_Controller {

	public function index()
	{
		$this->load->model('Usuario');
		
		if($this->Usuario->existeEmail('victor@7voz.com'))
			echo 'Existe el usuario: ';
		print_r( $this->Usuario->existeEmail('pedro@7voz.com'));
		$this->load->view('Holamundo');

	}
}

