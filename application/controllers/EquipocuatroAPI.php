<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class EquipocuatroAPI extends REST_Controller {

	/**
	 * Author: Equipo 4
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('Mdocumentos');
	}


	public function index_get() {
		$data['documentos'] = $this->Mdocumentos->listar_documentos();
		$response['data'] = $data;
		$this->response($response);
	}
	
	public function actualizar_post() {
		$id = $this->input->post('id', TRUE);
		$titulo = $this->input->post('titulo', TRUE);
		$fechaCarg = $this->input->post('fecha', TRUE);
		$status = $this->input->post('status', TRUE);
		$url = $this->input->post('url', TRUE);
		$matricula = $this->input->post('matricula', TRUE);
		$alumno = $this->input->post('alumno', TRUE);
		$urlfirmado = $this->input->post('urlfirmado', TRUE);

		if ($query = $this->Mdocumentos->actualizar_documento($id, $titulo, $fechaCarg, $status, $url, $matricula, $alumno, $urlfirmado)) {
			$response['message']= "Actualización exitosa";
			$this->response($response);
		} else {
			$response['message']= "Ocurrió un error";
			$this->response($response);
		}
	}

	public function insertar_post() {
		$titulo = $this->input->post('titulo', TRUE);
		$fechaCarg = $this->input->post('fecha', TRUE);
		$status = $this->input->post('status', TRUE);
		$url = $this->input->post('url', TRUE);
		$matricula = $this->input->post('matricula', TRUE);
		$alumno = $this->input->post('alumno', TRUE);
		$urlfirmado = $this->input->post('urlfirmado', TRUE);

		if ($query = $this->Mdocumentos->insertar_documento($titulo, $fechaCarg, $status, $url, $matricula, $alumno, $urlfirmado)) {
			$response['message']= "Inserción exitosa";
			$this->response($response);
		} else {
			$response['message']= "Ocurrió un error";
			$this->response($response);
		}
	}

	public function eliminar_post() {
		$idDocumento = $this->input->post('id', TRUE);

		if ($query = $this->Mdocumentos->eliminar_documento($idDocumento)) {
			$response['message']= "Eliminación exitosa";
			$this->response($response);
		} else {
			$response['message']= "Ocurrió un error";
			$this->response($response);
		}
	}

}