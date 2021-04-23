<?php

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('usuarios'))
		{
			redirect('dashboard');
		}
	}	
	
	/////---------------------------------------------------------
	///Funcion para verificar
	function verify(){
		//$matricula = $this->input->post('Matricula');
		//$contraseña = $this->input->post('Contraseña');
		$this->load->model('Musuario');
		$check = $this->Musuario->validate();
		if($check)
		{
			$this->session->set_userdata('usuarios','1');
			redirect('dashboard');
		}
		else
		{
			redirect('Login');
		}
	}

	/////---------------------------------------------------------
	//funcion de login

	function index(){		
		if($this->session->userdata('usuarios'))
		{
			redirect('dashboard');
		}
		$this->load->view('Login');		
	}
	/////---------------------------------------------------------
	function logout()
	{
		if($this->session->userdata('usuarios'))
		{
			$this->session->unset_userdata('usuarios');
			redirect('Login');
		}
	}
}
