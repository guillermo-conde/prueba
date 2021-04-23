<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	/**
	 * Autores: Equipo 3 Alta de documentos
	 */
	public function index()
	{
		$this->load->view('menu_documentos');
	}
}