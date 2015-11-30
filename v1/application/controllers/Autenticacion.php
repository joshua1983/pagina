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
    	/*
    	if ($this->session->has_userdata('nombre')){
    		
    		$selectPedidos = "select c.render, b.cantidad, b.precio, b.fecha from almacen a, pedidos b, zapato c where a.correo = ? and a.id = b.almacen and b.zapato = c.id";

    		$query = $this->db->query($selectPedidos, array($this->session->userdata('usuario')));

    		$dataPedidos = $query->result_array();
    		    		
    		$data = array(
    			"nombre" => $this->session->userdata('nombre'),
    			"pedidos" => $dataPedidos
    			);
    		$this->load->view('plantillas/encabezado',$data);
    		$this->load->view('home', $data);	
    		$this->load->view('plantillas/pie');	
    	}else{
    		$this->load->view('login');
    	}
    	*/

    	$this->load->view('login');
    }
	
	public function validar(){


		$this->load->library('form_validation');

		$this->form_validation->set_rules('txtUsuario', 'Username', 'required',
                array('required' => 'Debe escribir un %s.'));
        $this->form_validation->set_rules('txtPassword', 'Password', 'required',
                array('required' => 'Debe escribir un %s.'));

        if ($this->form_validation->run() == TRUE){
        	$usuario = $this->input->post('txtUsuario');
			$password = $this->input->post('txtPassword');
			$query = $this->db->query("select tipo, nombre from login where usuario = ".$this->db->escape($usuario)." and password = ".$this->db->escape($password));
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
				$data = array(
    				"nombre" => $this->session->userdata('nombre')
    			);
				$this->load->view('plantillas/encabezado',$data);
    			$this->load->view('usuario');	
    			$this->load->view('plantillas/pie');
			}else{
				$this->session->set_flashdata('loginEstado','Usuario o password incorrecto');
				$this->load->view('login');
			}
        }else{
        	$this->load->view('login');
        }

		
	}

	public function salir(){
		$datos_usuario = array('usuario', 'password', 'tipo', 'nombre', 'login');
		$this->session->unset_userdata($datos_usuario);
		$this->load->view("login");
	}
}
