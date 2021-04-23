<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class documentosafirmausuario extends CI_Controller {

	/**
	 * Autores: Equipo 3
	 */
	function __construct(){
		parent::__construct();
		$this->load->model("Modfu");
	}
	public function index()
	{
		$data['files'] = $this->Modfu->obtenerdato();
		$this->load->view('Documentosafirmausuario',$data);
	}
}
