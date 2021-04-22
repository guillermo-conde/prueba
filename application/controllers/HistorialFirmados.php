<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistorialFirmados extends CI_Controller {

	/**
	 * Autores: Equipo 5
	 */
	public function __construct(){
        parent::__construct();
        $this->load->model('Mhistorial');
	}

	public function index()
	{
		$data['idperiodos'] = $this->Mhistorial->obtener_periodo();
        $data['datos'] = $this->Mhistorial->obtener_datos();
		$data['IdDocumento'] = $this->Mhistorial->obtener_documentos();
        $data['IdAlumno'] = $this->Mhistorial->obtener_alumno();
		
		$this->load->view('historial_firmados', $data);
	}
}