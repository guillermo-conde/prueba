<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	/**
	 * Autores: Equipo 5
	 */
	public function index()
	{
		$this->load->view('busqueda');
	}
}