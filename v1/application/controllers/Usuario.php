<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	 * Controlador del usuario registrado
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
