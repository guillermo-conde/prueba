<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	/**
	 * Autores: Equipo 5
	 */
	public function __construct(){
        parent::__construct();
        $this->load->model('Mbusqueda');
		$this->load->helper('form');
	}

	public function index()
	{
		$data['idperiodos'] = $this->Mbusqueda->obtener_periodo();
        $data['datos'] = $this->Mbusqueda->obtener_datos();
		$data['IdDocumento'] = $this->Mbusqueda->obtener_documentos();
        $data['IdAlumno'] = $this->Mbusqueda->obtener_alumno();
		
		$this->load->view('Busqueda', $data);
	}
	
}