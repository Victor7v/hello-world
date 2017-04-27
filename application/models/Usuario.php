<?php

class Usuario extends CI_Model {
	function __construct(){
	parent::__construct(); //CI_Model();
	//parent::CI_Model();
	}
//algo que borrar para cuando eso.. 
	function comprobarLogin($mail,$pass){
	 	
	   $this->db->where('emailUsuario',$mail);
	   $query = $this->db->get('usuario');
	   if($query->num_rows() > 0){
	  	   $usuario =  $query->row();
	           return $this->bcrypt->check_password($pass,$usuario['contrasenaUsuario']) ? $usuario : 0;
//		   return $query->row();
	   } else {
	      return 0;
	   }
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

//
