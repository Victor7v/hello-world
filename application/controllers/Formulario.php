<?php

defined('BASEPATH') OR exit ('NO DIREC SCRIPT ACCESS ALLOWED');

class Formulario extends CI_Controller{
	function index(){
		//cargamos el helper de form
		$this->load->helper(array('form'));
		// cargamos el form validation library
		$this->load->library(array('form_validation','session'));
		
		echo $this->session->userdata('cadena');//recupera la cadena de texto guardada como variable 
		$this->session->unset_userdata('cadena');//elimina la sesión
		// establecemos las reglas de validación
		$this->form_validation->set_rules('name', 'Name', 'required');
	
		if($this->form_validation->run()==FALSE) {
			$this->load->view('myform');
		} else  {
			$this->load->view('formsuccess');
		}
	}
}//login
