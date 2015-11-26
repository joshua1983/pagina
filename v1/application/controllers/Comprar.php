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
       	$this->load->helper('form');
       	$this->session;
    }
	
	public function resumen($idZapato){
		$query = $this->db->query("select a.descripcion, a.fabrica, a.linea, a.zuela, a.capellada, a.adorno, a.color, b.nombre as almacen from zapato a, almacen b where a.almacen = b.id and a.id = ".$this->db->escape($idZapato));
		$fila = $query->row_array();

		$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
		$this->load->view('resumen');
		$this->load->view('plantillas/pie');
	}

	public function resumenout($idZapato){
		$query = $this->db->query("select descripcion, render, precio from zapato where id = ".$this->db->escape($idZapato));
		$datos = $query->row_array();

		if (count($datos)> 0){
			$data = array(
				"descripcion" => $datos["descripcion"],
				"render" => $datos["render"],
				"precio" => $datos["precio"]
				);
			$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
			$this->load->view('resumen', $datos);
			$this->load->view('plantillas/pie');
		}
	}

	public function cerrarCompra(){
		/*
		Registrar el almacen si no existe
		*/
		$nombre_almacen = $this->input->post('txtAlmacen');
		$correo = $this->input->post("txtCorreo");
		$cantidad = $this->input->post("txtCantidad");
		$precio = $this->input->post("txtPrecio");

		$query = $this->db->query("select id from almacen where correo = '".$this->db->escape($correo)."'");
		$res1 = $query->row_array();
		if (count($res1)>0){
			// registrar el pedido para el almacen
			
		}else{
			// insertar almacen nuevo
		}

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
