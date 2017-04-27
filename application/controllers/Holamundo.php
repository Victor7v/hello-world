<?php
defined('BASEPATH') OR exit('no direct script access allowed');
//algo diferente dentro de este fichero para eliminar. 
class Holamundo extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{

/*		$this->load->model('Usuario');
		$this->load->helper('url');		
		
		if(!isset($_POST['mailUs']))
			$this->load->view('Holamundo');
		else {
			if($this->Usuario->existeEmail($_POST['mailUs'])){
				redirect(base_url().'index.php/Bienvenida');
			} else {
				$data['error'] = "Email o password incorrectos";
				$this->load->view('Holamundo',$data);
			}
		 } */
	redirect('dashboard');
	}//index

	public function manejoBD()
	{
			//CARGAMOS LA LIBRERIA BCRYPT Y SESSION
			$this->load->library(array('session','bcrypt'));
				//insertar un valor en la base de datos
			$tokenAna = $this->token();//SOLO SIRVE PARA COMRPOBAR EN EL LOGIN. 
			$hash  = $this->bcrypt->hash_password('Lorena');
			
			//////Comprobacion de desencriptado 
			echo $this->bcrypt->check_password($hash, 'Lorena');
//			$pass = md5('ana');
			echo $hash;
			$data = array (
				'idUsuario' => '',
				'nombreUsuario' => 'Lorena',
				'contrasenaUsuario' => $hash,
				'emailUsuario' => 'Lorena@7voz.com'
			);
		//	$this->db->insert('usuario',$data);
			
				//modificar un valor en la base de datos
			$data = array (	
				'idUsuario' => '4',
				'nombreUsuario' => 'Anita',
				'contrasenaUsuario' => 'Ana',
				'emailUsuario' => 'paco@7voz.com'
			);
			/*
			$this->db->set($data);
			$this->db->where("idUsuario",'4');
			$this->db->update('usuario',$data);*/
			//podemos concatenar
			//$this->db->set($data)->where("idUsuario",'4');->update('usuario',$data);	
				//eliminar un registro 
			//$this->db->delete("usuario","idUsuario = 1");
				//recogiendo valores de la base de datos 
			/*$query = $this->db->get("usuario");
			$data['record'] = $query->result();
			print_r($data['record']);*/
	}
	
	public function token(){
		$token = md5(uniqid(rand(),true));
//		$this->session->set_useradd('token',$token);
		echo $token.' <-- Token unico';
		return $token;
	}

	function enviamail($mail=null){
		//Cargamos la libreria email 
		$this->load->library('email');
	
		//configuración para el email
		$configGmail = array (
			'protocol' => 'smtp',
			'smtp host' => 'ssl://smtp.gmail.com',
			'smtp port' => 465,
			'smtp user' => 'tuemail@gmail.com',//Email de donde se manda
			'smtp pass' => 'contraseña',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);
		//cargamos la configurción para enviar con gmail
		$this->email->initialize($configGmail);
		
		$this->email->from('vrmcasado@gmail.com', 'Víctor');
		$this->email->to('vrmcasado@gmail.com');

		$this->email->subject('Email test');		
		$this->email->message('probando el email.');
		
		if($this->email->send()){
			echo 'Email enviado';
		}else{
			echo'error al enviar email';
		}
		var_dump($this->email->print_debugger());
	}
}

