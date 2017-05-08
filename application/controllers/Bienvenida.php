<?php
defined('BASEPATH') OR exit('no direct script access allowed ');
class Bienvenida extends CI_Controller
{
	function index()
	{
		echo 'Hola amigo';
	}
	
	function algo($intro=null)
	{ 
		//cargamos la libreria de sesión
		$this->load->library('session');	
		//iniciamos la sesion para guardar una cadena de caracteres
		if($intro!=null){
			$this->session->set_userdata('cadena', $intro);
		}
		$datos = array(
		'head'=>'hola, soy el header',
		'body'=>'<h3>holaa, soy el body</h3>'
		);
		$this->load->view('header',$datos);
		$this->load->view('body',$datos);
	}
	
	function variable($var=null)
	{
		echo $var.'  <-- Variable introducida';
	}

}
?>
