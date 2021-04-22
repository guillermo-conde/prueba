<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class Alumnoapi extends REST_Controller 
{
    private $model = 'Musuario';

	/**
	 * Generacion de datos de un alumno
	 */
    function __construct()
{
    /*fncion de prueba */
    parent::__construct();
    //obtenemos modelo
    $this->load->model($this->model);
}

public function alumnos_get(){
    if($query=$this->{$this->model}->listar_datos()){
    $response['status']= TRUE;
    $response['message']='API de alumnos';
    $response['data'] = $query;
    $this->response($response);
    }else{
        $response['status'] = FALSE;
        $response['message'] = 'No se encontraron los datos';
        $response['data'] = '';
    }
    $this->response($response);
}
public function agregar_post() {
    $matricula = $this->input->post('matricula', TRUE);
    $nombre = $this->input->post('nombre', TRUE);
    $apellidos = $this->input->post('apellidos', TRUE);
    $email = $this->input->post('email', TRUE);
    $contraseña = $this->input->post('contraseña', TRUE);

    if ($query = $this->{$this->model}->insertar_dato($matricula, $nombre, $apellidos, $email, $contraseña)) {
        $response['message']= "Dato agregado";
        $this->response($response);
    } else {
        $response['message']= "Warning error de datos";
        $this->response($response);
    }
}
    public function modificar_post() {
		$id = $this->input->post('idusuarios', TRUE);
		$matricula = $this->input->post('matricula', TRUE);
		$nombre = $this->input->post('nombre', TRUE);
		$apellidos = $this->input->post('apellidos', TRUE);
		$email = $this->input->post('email', TRUE);
		$contraseña = $this->input->post('contraseña', TRUE);

		if ($query = $this->{$this->model}->actualizar_dato($id, $matricula, $nombre, $apellidos, $email, $contraseña)) {
			$response['message']= "Actualización correcta";
			$this->response($response);
		} else {
			$response['message']= "Warning error de datos";
			$this->response($response);
		}
}
}
