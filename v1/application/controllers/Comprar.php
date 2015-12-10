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
				"precio" => $datos["precio"],
				"zapato" => $idZapato
				);
			$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
			$this->load->view('resumen', $data);
			$this->load->view('plantillas/pie');
		}
	}

	public function resumenoutmod(){
		if (   (isset($_POST["plataforma"]) || isset($_GET["plataforma"])) 
			&& (isset($_POST["capellada"]) || isset($_GET["capellada"]))
			&& (isset($_POST["precio"]) || isset($_GET["precio"])) 
			) {
			$plat = (isset($_POST['plataforma'])) ? $_POST["plataforma"]: $_GET["plataforma"];
			$cap = (isset($_POST['capellada'])) ? $_POST["capellada"]: $_GET["capellada"];
			$precio = (isset($_POST['precio'])) ? $_POST["precio"]: $_GET["precio"];


			$query_plat = $this->db->query("select render from plataformas where id = ".$plat);
			$datos_plat = $query_plat->row_array();

			$query_cap = $this->db->query("select render from capelladas where id = ".$cap);
			$datos_cap = $query_cap->row_array();


			$data = array(
				"zuela" => $datos_plat["render"],
				"capellada" => $datos_cap["render"],
				"precio" => $precio
				);
			$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
			$this->load->view('resumen', $data);
			$this->load->view('plantillas/pie');
		}else{
			echo '{"cantidad": 0}';
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
		$zapato = $this->input->post("txtZapato");

		$query = $this->db->query("select id from almacen where correo = ".$this->db->escape($correo)."");
		$res1 = $query->row_array();
		if (count($res1)>0){
			// registrar el pedido para el almacen
			$dataInsert = array(
				"almacen" => $res1["id"],
				"zapato" => $zapato,
				"cantidad" => $cantidad,
				"precio" => $precio
				);
			$this->db->insert("pedidos", $dataInsert);

			$consultaZapato = $this->db->query("select descripcion, render from zapato where id = ".$this->db->escape($zapato)."");
			$dataZapatos = $consultaZapato->row_array();
			/*
			* Enviar correo del pedido
			*/
			$this->load->library('email');

			$this->email->from('josue.barrios@gmail.com', 'Bot TuFabrica');
			$this->email->to('tufabricaco@gmail.com');
			$this->email->cc($correo);
			
			$this->email->subject('Nuevo pedido del almacen: '. $nombre_almacen);
			$this->email->message('Zapato: '. $dataZapatos["descripcion"]. " Cantidad: ". $cantidad. " Precio: ". $precio. " Total: ". $precio * $cantidad);

			$this->email->send();

			$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
			$this->load->view('fincompra');
			$this->load->view('plantillas/pie');

		}else{
			// insertar almacen nuevo

			$dataInsert = array(
				"nombre" => $nombre_almacen,
				"correo" => $correo
				);
			$this->db->insert("almacen", $dataInsert);
			$idAlmacen = $this->db->insert_id();

			$consultaLogin = "select id from login where usuario =?";
			$query = $this->db->query($consultaLogin, array($correo));
			if (count($query->row_array()) == 0){
				$dataAlmacen = array(
					"usuario" => $correo,
					"nombre" => $nombre_almacen,
					"password" => "123"
					);
				$this->db->insert("login", $dataAlmacen);
				
			}
			// registrar el pedido para el almacen
			$dataInsert = array(
				"almacen" => $idAlmacen,
				"zapato" => $zapato,
				"cantidad" => $cantidad,
				"precio" => $precio
				);
			$this->db->insert("pedidos", $dataInsert);

			$consultaZapato = $this->db->query("select descripcion, render from zapato where id = ".$this->db->escape($zapato)."");
			$dataZapatos = $consultaZapato->row_array();
			/*
			* Enviar correo del pedido
			*/
			$this->load->library('email');

			$this->email->from('josue.barrios@gmail.com', 'Bot TuFabrica');
			$this->email->to('tufabricaco@gmail.com');
			$this->email->cc($correo);
			
			$this->email->subject('Nuevo pedido del almacen: '. $nombre_almacen);
			$this->email->message('Zapato: '. $dataZapatos["descripcion"]. " Cantidad: ". $cantidad. " Precio: ". $precio. " Total: ". $precio * $cantidad);

			$this->email->send();

			$this->load->view('plantillas/encabezado',$this->session->has_userdata('nombre'));
			$this->load->view('fincompra');
			$this->load->view('plantillas/pie');

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
