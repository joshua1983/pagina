<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	 * Controlador del usuario registrado
	 */
	public function index()
	{
		$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
		$this->load->view('usuario');
		$this->load->view('plantillas/pie');
	}

	public function __construct(){
		parent::__construct();
       	$this->load->database();
       	$this->load->helper('url');
       	$this->session;
    }

	public function editarZapato($idFabrica, $idLinea){
		$data = array(
    			"nombre" => $this->session->userdata('nombre'),
    			"idFabrica" => $idFabrica,
    			"idLinea" => $idLinea
    		);
		$this->load->view('plantillas/encabezado',$data);
		$this->load->view('editor');	
		$this->load->view('plantillas/pie');	
	}
}
