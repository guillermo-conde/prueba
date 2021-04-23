<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firma extends CI_Controller {

	/**
	 * Author: Equipo 4
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('Mdocumentos');
	}

	public function index($id=null)
	{
		$data['documento'] = $this->Mdocumentos->obtener_documento($id);
		$this->load->view('firma', $data);
	}
	/**
	 * Author: Equipo 4
	 */
	public function emergente()
	{
		$this->load->view('inicioFirma');
	}
}