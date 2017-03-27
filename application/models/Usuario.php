<?php

class Usuario extends CI_Model {
	function __construct(){
	parent::__construct(); //CI_Model();
	//parent::CI_Model();
	}

	function existeEmail($mail){
	 	
		$this->db->where('emailUsuario',$mail);
		//$this->db->where('contrasenaUsuario',md5($clave);
		$query = $this->db->get('usuario');
		if($query->num_rows() > 0){
		   return $query->row();
		}
		return 0;
	}

	function inserta_usuario($datos = array()){
		if(!$this->_required(array("emailUsuario","contrasenaUsuario"),$datos)){//
			return FALSE; 
		}
		
		//clave, encriptado de clave.. 
		$datos['contrasenaUsuario'] = md5($datos['contrasenaUsuario']);
		
		$this->db->insert('usuario',$datos);
		return $this->db->insert_id();	
	}
}


