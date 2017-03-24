<?php
define('BASEPATH') OR exit('NO DIRECT SCRIPT ACCESS ALLOWED');

class Login extends CI_Controller {

	public function index ()
	{
		$this->load->view('login');
	}

}




