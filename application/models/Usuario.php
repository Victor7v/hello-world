<?php

class Usuario extends CI_Model {
	function __construct(){
	parent::__construct(); //CI_Model();
	//parent::CI_Model();
	}
	//Comentario para git
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
		echo $datos['emailUsuario'];
		if($datos['nombreUsuario']=='' || $datos['emailUsuario']=='' || $datos['cpmtrasemaUsuario'] == ''){
			return FALSE; 
		}
		
		//clave, encriptado de clave.. 
		$datos['contrasenaUsuario'] = md5($datos['contrasenaUsuario']);
		
		$this->db->insert('usuario',$datos);
		return $this->db->insert_id();	
	}
}


