<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	/**
	 * Modulo para API de búsqueda
	 * Autores: Equipo 5
	 */

require(APPPATH.'libraries/REST_Controller.php');

class BusquedaAPI extends REST_Controller {

	private $model = 'Mdocumentos';
	public function __construct(){

		parent::__construct();
		/**
		 * Obtención del modelo
		*/
		$this->load->model($this->model);
	}

	/**
	 * Funcion de API
	 */
	public function index_get(){
		$data['documentos'] = $this->Mdocumentos->listar_documentos();
		$response['data'] = $data;
		$this->response($response);
	}

	public function buscarAPI_get(){
		if($query=$this->{$this->model}->Buscar_fecha()) {
		$response[' status '] = TRUE ;
		$response[' data '] = $query ;
		
		}else{
			
		$response[' status '] = FALSE ;
		$response[' data '] = '' ;
		
		}

		$this->response($response);
		
		
	}
}