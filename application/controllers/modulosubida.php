<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modulosubida extends CI_Controller {

	/**
	 * Autores: Equipo
	 */
	public function index()
	{
		$this->load->view('altaalum');
	}
}