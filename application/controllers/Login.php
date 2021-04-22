<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Equipo 1
	 */
	public function index()
	{
		$this->load->view('login');
	}
}