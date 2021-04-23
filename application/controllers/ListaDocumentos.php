<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaDocumentos extends CI_Controller {

	/**
	 * Author: Equipo 4
	 */

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("America/Mexico_City"); //Toma el tiempo hora de Mexico - America
		$this->load->model('Mdocumentos');
		$this->load->helper('form'); //para la validación del buscador en la vista 'ListaDocumentos.php'
	}


	public function index() {
		$data = array(); //se crea un arreglo
		$data['documentos'] = $this->listar_alumnos(); //en la posicion documentos, se muestran todos los alumnos que existen
		$this->load->view('listaDocumentos', $data);
	}
	
	
	/**
	 * Funcion para recibir la fecha que se almaceno en la DB
	 * @author EQUIPO 4
	 */
	private function diferencia_fecha($fecha){
		$fecha =  new DateTime($fecha); //dato tipo tiempo/hora - tiempo/fecha
		$fecha_actual = new DateTime(date('Y-m-d')); //fecha actual
		$fecha =$fecha->diff($fecha_actual); 
		return $fecha->days;
	}//End 

	/**
	 * Funcion para listar alumnos existentes 'ListaDocumentos.php'
	 * @author EQUIPO 4
	 */
	public function listar_alumnos(){
		$lista = array();//El resultado final
		$alumno = array();//Contiene la info de cada alumno
		$info_alumno= $this->Mdocumentos->listar_documentos(); 
		foreach ($info_alumno as $key => $value) {
			$alumno['idDocumento'] = $value->IdDocumento;
			$alumno['titulo'] = $value->titulo;
			$alumno['fechaCarg'] = $value->fechaCarg;
			$alumno['status'] = $value->status;
			$alumno['url'] = $value->url;
			$alumno['matricula'] = $value->matricula;
			$alumno['alumno'] = $value->alumno;
			$alumno['fechaDif'] = $this->diferencia_fecha($value->fechaCarg);
			$lista[] = $alumno;
		}//End foreach

		return $lista;
	}//End listar_alumnos

	/**
	 * Funcion a cargar los datos encontrados 'ListaDocumentos.php'
	 * @author EQUIPO 4
	 */
	public function buscador(){
		$data = array(); //declaracion de array vacio
		$buscador = $this->input->post('buscador'); //tomamos el imput text del buscador
		if($buscador == ''){
			$data['encontro'] = array('estatus' => false , 'info' => 'No hay datos encontrados');
		}//End if
		else{
			if (sizeof($this->buscar_listar_alumnos($buscador)) > 0) { //el resultado de la consulta es mayor a cero
				$data['documentos'] = $this->buscar_listar_alumnos($buscador);
			}
			else{
				$data['encontro'] = array('estatus' => false , 'info' => 'No hay datos encontrados');
			}
		}//End else
		$this->load->view('listaDocumentos', $data);
	}//End 

	/**
	 * Mostrara los alumnos encontrados gracias al buscador 'ListaDocumentos.php'
	 * @author EQUIPO 4
	 */
	public function buscar_listar_alumnos($buscador){
		$lista = array();//El resultado final - capturamos los alumnos encontrados por el buscador
		$alumno = array();//Contiene la info de cada alumno
		$info_alumno = $this->Mdocumentos->buscador($buscador); 
		foreach ($info_alumno as $key => $value) {
			$alumno['idDocumento'] = $value->IdDocumento;
			$alumno['titulo'] = $value->titulo;
			$alumno['fechaCarg'] = $value->fechaCarg;
			$alumno['status'] = $value->status;
			$alumno['url'] = $value->url;
			$alumno['matricula'] = $value->matricula;
			$alumno['alumno'] = $value->alumno;
			$alumno['fechaDif'] = $this->diferencia_fecha($value->fechaCarg);
			$lista[] = $alumno;
		}//End foreach

		return $lista;
	}//End listar_alumnos

}