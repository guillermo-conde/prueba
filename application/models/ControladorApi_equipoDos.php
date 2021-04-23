<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*Integrantes del equipo 
-Jaqueline Ramires Reyes
-Leonardo Hernandez Tzompantzi 
-Euardo Salazar Santos
-Fernando Torres Perez
-Christopher Tehozol Pedraza
*/

class ControladorApi_equipoDos extends CI_Model{

	public function listar_datos(){

		return $this->db->get('files')->result();
	}

	public function insertar($title,$descripcion,$url,$type){

		$this->db->set('title',$tite);
		$this->db->set('description',$descripcion);
		$this->db->set('url',$url);
		$this->db->set('type',$type);

		return $this->db->insert('files');
	}

	public function actualizar($id,$title,$descripcion,$url,$type){

		$this->db->where('id',$id);
		$this->db->set('title',$tite);
		$this->db->set('description',$descripcion);
		$this->db->set('url',$url);
		$this->db->set('type',$type);

		return $this->db->update('files');
	}
}
