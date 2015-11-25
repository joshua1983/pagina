<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprar extends CI_Controller {

	/**
	 * Controlador del usuario registrado
	 */
	public function __construct(){
		parent::__construct();
       	$this->load->database();
       	$this->load->helper('url');
       	$this->session;
    }
	
	public function resumen($idZapato){
		$query = "select a.descripcion, a.fabrica, a.linea, a.zuela, a.capellada, a.adorno, a.color, b.nombre as almacen from zapato a, almacen b where a.almacen = b.id";
		$fila = $query->row_array();

		$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
		$this->load->view('resumen');
		$this->load->view('plantillas/pie');
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
