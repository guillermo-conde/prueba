<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller {
	/**
* Constructor de la clase
*
* @return void
*/
public function __construct()
{
parent::__construct();


//Corremos modelo de base de datos
$this->load->model('Mprofesor');

}
// -------------------------------------------------------------------

	/**
	 * Equipo 1
	 */
	public function index()
	{

		/*	$thisform_validation->set_rules(
				array(
					array(
						'field' => 'Matricula',
						'label' => 'Matricula',
						'rules' => 'required'
					),
					array(
						'field' => 'Nombre',
						'label' => 'Nombre',
						'rules' => 'required'
					),
					array(
						'field' => 'Apellidos',
						'label' => 'Apellidos',
						'rules' => 'required'
					),
					array(
						'field' => 'Email',
						'label' => 'Email',
						'rules' => 'required'
					),
					array(
						'field' => 'Contraseña',
						'label' => 'Contraseña',
						'rules' => 'required'
					)
				
				)
			);
*/	
			if(/*$this->form_validation->run() &&*/ $this->input->post()){
				$data = array(
					'Matricula'=> $this->input->post('Matricula'),
					'Nombre'=> $this->input->post('Nombre'),
					'Apellidos'=> $this->input->post('Apellidos'),
					'Email'=> $this->input->post('Email'),
					'Contraseña'=> $this->input->post('Contraseña'),
				);
				$this->Mprofesor->guardar_datos($data);
				$this->alertas->db($this->Mprofesor->guardar_datos($data), 'Profesores/profesores');
			}
	
	
	
			$this->load->view('profesores');
			
	/*	$this->load->view('usuarios'); */
	//funcion para direccionarse a la pagina de login
	}
	public function Login()
	{
		$this->load->view('login');
		//Funcion para llamar los datos del formulario
	}
	public function Profesores()
	{

		$this->form_validation->set_rules(
			array(
				array(
					'field' => 'Matricula',
					'label' => 'Matricula',
					'rules' => 'required'
				),
				array(
					'field' => 'Nombre',
					'label' => 'Nombre',
					'rules' => 'required'
				),
				array(
					'field' => 'Apellidos',
					'label' => 'Apellidos',
					'rules' => 'required'
				),
				array(
					'field' => 'Email',
					'label' => 'Email',
					'rules' => 'required'
				),
				array(
					'field' => 'Contraseña',
					'label' => 'Contraseña',
					'rules' => 'required'
				)
			
			)
		);

		if(/*$this->form_validation->run() &&*/ $this->input->post()){
			$data = array(
				'Matricula'=> $this->input->post('Matricula'),
				'Nombre'=> $this->input->post('Nombre'),
				'Apellidos'=> $this->input->post('Apellidos'),
				'Email'=> $this->input->post('Email'),
				'Contraseña'=> $this->input->post('Contraseña'),
			);
			//Alertas que se establece a traves de libraries y database
			$this->alertas->db($this->Mprofesor->guardar_datos($data), 'Profesores/profesores');
		}



		$this->load->view('profesores');
		
	}
	
}
