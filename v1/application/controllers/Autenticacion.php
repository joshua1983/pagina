<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacion extends CI_Controller {

	/**
	 * Autenticacion de los usuarios
	 */

	public function __construct(){
		parent::__construct();
       	$this->load->database();
       	$this->load->helper('url');
       	$this->load->helper('form');
       	$this->session;
    }

    public function index(){
    	if ($this->session->has_userdata('nombre')){
    		$this->load->view('welcome_message');	
    	}else{
    		$this->load->view('login');
    	}
    }
	
	public function validar($usuario, $password){
		$query = $this->db->query("select tipo, nombre from login where usuario = '".$this->db->escape($usuario)."' and password = '".$this->db->escape($password)."'");
		$fila = $query->row_array();
		if (count($fila)>0){
			$datos_usuario = array(
				'usuario' => $usuario,
				'password' => $password,
				'tipo' => $fila["tipo"],
				'nombre' => $fila["nombre"],
				'login' => true
				);
			$this->session->set_userdata($datos_usuario);
		}
	}

	public function salir(){
		$datos_usuario = array('usuario', 'password', 'tipo', 'nombre', 'login');
		$this->session->unset_userdata($datos_usuario);
	}
}
