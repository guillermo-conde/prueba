<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class apiup  extends REST_Controller 
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

public function datos_get(){
    if($query=$this->{$this->model}->listar_datos()){
    $response['status']= TRUE;
    $response['message']='API';
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
    $id = $this->input->post('id', TRUE);
    $title = $this->input->post('title', TRUE);
    $description = $this->input->post('description', TRUE);
    $url = $this->input->post('url', TRUE);
    $type = $this->input->post('type', TRUE);

    if ($query = $this->{$this->model}->insertar_dato($id, $title, $description, $url, $type)) {
        $response['message']= "Dato agregado";
        $this->response($response);
    } else {
        $response['message']= "Warning error de datos";
        $this->response($response);
    }
}
    public function modificar_post() {
		$id = $this->input->post('id', TRUE);
		$title = $this->input->post('title', TRUE);
		$description = $this->input->post('description', TRUE);
		$url = $this->input->post('url', TRUE);
		$type = $this->input->post('type', TRUE);
		if ($query = $this->{$this->model}->actualizar_dato($id, $title, $description, $url, $type )) {
			$response['message']= "Actualización correcta";
			$this->response($response);
		} else {
			$response['message']= "Warning error de datos";
			$this->response($response);
		}
}
}
