<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'libraries/REST_Controller.php');

class Api_equipoDos extends REST_Controller                   

/*Integrantes del equipo 
-Jaqueline Ramires Reyes
-Leonardo Hernandez Tzompantzi 
-Euardo Salazar Santos
-Fernando Torres Perez
-Christopher Tehozol Pedraza
*/

{
	private $model = 'ControladorApi_equipoDos';
	function __construct()
	{
		parent::__construct();
		$this -> load ->model($this ->model);
	}

	/*Funcion de listar datos */

	public function informacion_get() {
		if($query=$this->{$this -> model}->listar_datos()){

			$response['status'] = TRUE;
			$response['message'] = 'Hola esta es una API';
			$response['data']= $query;
		} else {
			$reponse['status'] = FALSE;
			$response['message']='No se encontro info';
			$response['data']= '';
		}

		$this ->response($response);
	}

	public function insertar_post()
	{
		$title = $this->input->post('title', TRUE);
		$descripcion = $this->input->post('descripcion', TRUE);
		$url = $this->input->post('url', TRUE);
		$type = $this->input->post('type', TRUE)

		if ($query = $this->{$this->model}->insertar($title,$descripcion,$url,$type)) {

			$response['status'] = TRUE;
			$response['message'] = 'El dato se inserto correctamente';
			$response['data'] = $query;
		} else {
			$reponse['status'] = FALSE;
			$response['message'] = 'No se encontro info';
			$response['data']= '';
		}

		$this->response($response);
	}

	public function actualizar_post()
	{
		$id = $this->input->post('id', TRUE);
		$title = $this->input->post('title', TRUE);
		$descripcion = $this->input->post('descripcion', TRUE);
		$url = $this->input->post('url', TRUE);
		$type = $this->input->post('type', TRUE)
		if ($query = $this->{$this->model}->actualizar($id,$title,$descripcion,$url,$type)) {

			$response['status'] = TRUE;
			$response['message'] = 'El dato se inserto correctamente';
			$response['data'] = $query;
		} else {
			$reponse['status'] = FALSE;
			$response['message'] = 'No se encontro info';
			$response['data']= '';
		}

		$this->response($response);
	}
}
