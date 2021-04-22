<?php

defined ('BASEPATH') OR exit ('No direct script access allowed');

/**Modelo para alumnos
 *Aqui tendremos informacion e insertaremos informacion de los alumnos
 * @author Equipo1
 * */


class Musuario extends CI_Model
{

	public function guardar_datos($data)
	{
		$this->db->where('idusuarios', $id);
		return $this->db->insert('usuarios', $data);
	}
	public function listar_datos()
	{
		return $this->db->get('usuarios')->result();
	}
	public function insertar_dato($matricula, $nombre, $apellidos, $email, $contraseña){
		$this->db->set('Matricula', $matricula);
		$this->db->set('Nombre', $nombre);
		$this->db->set('Apellidos', $apellidos);
		$this->db->set('Email', $email);
		$this->db->set('Contraseña', $contraseña);
		return $this->db->insert('usuarios');
	}
	public function actualizar_dato($id, $matricula, $nombre, $apellidos, $email, $contraseña){
		$this->db->where('idusuarios', $id);
		$this->db->set('Matricula', $matricula);
		$this->db->set('Nombre', $nombre);
		$this->db->set('Apellidos', $apellidos);
		$this->db->set('Email', $email);
		$this->db->set('Contraseña', $contraseña);
		return $this->db->update('usuarios');
	}


}
