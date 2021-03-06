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

			$query = $this->db->query("select id, nombre, ruta, fecha_lanz, fabrica from lineas where fabrica = ".$this->db->escape($fabID)."");
			echo json_encode($query->result_array());

		}else{
			echo "Fabrica no encontrada";
		}
	}

	public function getCapelladas(){
		if (isset($_POST["fabrica"]) || isset($_GET["fabrica"])){
			$fabID = (isset($_POST['fabrica'])) ? $_POST["fabrica"]: $_GET["fabrica"];

			$query = $this->db->query("select id, nombre, render from capelladas where fabrica = ".$this->db->escape($fabID)."");
			echo json_encode($query->result_array());
		}else{
			echo '{"cantidad": 0}';
		}
	}

	public function getPlataformas(){
		if (isset($_POST["fabrica"]) || isset($_GET["fabrica"])){
			$fabID = (isset($_POST['fabrica'])) ? $_POST["fabrica"]: $_GET["fabrica"];

			$query = $this->db->query("select id, nombre, render from plataformas where fabrica = ".$this->db->escape($fabID)."");
			echo json_encode($query->result_array());
		}else{
			echo '{"cantidad": 0}';
		}
	}

	public function getZapato(){
		if ( (isset($_POST["fabrica"]) || isset($_GET["fabrica"])) && (isset($_POST["linea"]) || isset($_GET["linea"])) ) {
			$fabID = (isset($_POST['fabrica'])) ? $_POST["fabrica"]: $_GET["fabrica"];
			$linID = (isset($_POST['linea'])) ? $_POST["linea"]: $_GET["linea"];

			$query = $this->db->query("select a.id, a.zuela idZuela, a.capellada idCapellada, a.precio, c.render zuela, b.render capellada from zapato a, capelladas b, plataformas c where a.fabrica = ".$this->db->escape($fabID)." and a.linea = ".$this->db->escape($linID)." and a.capellada = b.id and a.zuela = c.id");
			echo json_encode($query->result_array());
		}else{
			echo '{"cantidad": 0}';
		}
	}

}
