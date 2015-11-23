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
       	$this->load->library('parser');
       	$this->session;
    }

	public function getFabricas(){
		$query = $this->db->query("select id, nombre, telefono, direccion, ruta from fabricas");

		echo json_encode($query->result_array());
	}

	public function getFabrica($id){
		$query = $this->db->query("select id, nombre, telefono, direccion, ruta from fabricas where id= ". $this->db->escape($id));

		echo json_encode($query->result_array());
	}

	public function getLineasZapatos(){
		if (isset($_POST['fabrica']) || isset($_GET['fabrica'])){
			$fabID = (isset($_POST['fabrica'])) ? $_POST["fabrica"]: $_GET["fabrica"];

			$query = $this->db->query("select id, nombre, ruta from lineas where fabrica = ".$this->db->escape($fabID)."");
			echo json_encode($query->result_array());

		}else{
			echo "Fabrica no encontrada";
		}
	}
}
