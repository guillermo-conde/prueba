<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genoficios extends CI_Controller {

	/**

	 */
	public function index()
	{
		$this->load->view('Genoficio');
	}
	public function historial()
	{
		$this->load->view('historial_documentos');
	}
	public function Descargar()
	{
		$this->load->view('descargar_documento');
	}
}
