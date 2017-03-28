<?php
class Bienvenida extends CI_Controller
{
	function index()//comentario para git, borrar 
	{
		echo 'Hola amigo';
	}
	
	function algo($intro=null)
	{
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
