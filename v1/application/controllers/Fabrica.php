<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fabrica extends CI_Controller {

	/**
	 * Controlador para manejar las fabricas
	 */

	public function __construct(){
		parent::__construct();
       	$this->load->database();
       	$this->load->helper('url');
       	$this->load->helper('form');
       	$this->session;
    }

	public function getFabricas(){
		$query = $this->db->query("select nombre, telefono, direccion, ruta from fabricas");

		echo json_encode($query->result_array());
	}
}
