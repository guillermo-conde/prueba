<?php

defined ('BASEPATH') OR exit ('No direct script access allowed');

/**Modelo para alumnos
 *Aqui tendremos informacion e insertaremos informacion de los alumnos
 * @author Equipo1
 * */


class Mdocu extends CI_Model
{

	public function guardar_datos($data)
	{
		$this->db}->where('id', $id);
		return $this->db->insert('datos', $data);
	}
	public function listar_datos()
	{
		return $this->db->get('datos')->result();
	}
	public function insertar_dato($title, $desription, $url, $type ){
		$this->db->set('title', $title);
		$this->db->set('description', $desription);
		$this->db->set('url', $url);
		$this->db->set('type', $type);
		return $this->db->insert('datos');
	}
	public function actualizar_dato($id, $title, $desription, $url, $type){
		$this->db->where('id', $id);
		$this->db->set('title', $title);
		$this->db->set('description', $desription);
		$this->db->set('url', $url);
		$this->db->set('type', $type);
		return $this->db->update('title');
	}


}
