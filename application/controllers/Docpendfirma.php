<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docpendfirma extends CI_Controller {

	/**
	 * Autores: Equipo 3
	 */
	function __construct(){
		parent::__construct();
		$this->load->model("Modfu");
	}
	public function index()
	{
		$data['files'] = $this->modfu->obtenerdato();
		$this->load->view('documentosaFirmaUsuario',$data);
	}
}
