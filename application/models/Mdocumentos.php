<?php

defined ('BASEPATH') OR exit ('No direct script access allowed');

/**Modelo para alumnos
 *Aqui tendremos informacion e insertaremos informacion de los alumnos
 * @author Equipo1
 * */


class Mdocumentos extends CI_Model
{
	/**
	 * Funcion para listar documentos en 'ListaDocumentos.php'
	 * @author EQUIPO 4
	 */
	public function listar_documentos()
	{
		$this->db->where('status', false);
		$this->db->order_by('fechaCarg','asc'); //ordena de manera ascente los elementos
		return $this->db->get('documentose4')->result();
	}
	
		/**
	 * Funcion Busqueda API
	 * @author EQUIPO 5
	 */
	public function Buscar_fecha()
	{
		
		return $this->db->get('documentose4')->result();
		
	}
	/**
	 * Funcion para obtener documento en 'firma.php'
	 * @author EQUIPO 4
	 */
	public function obtener_documento($id){
		$this->db->where('IdDocumento', $id);
		return $this->db->get('documentose4')->row();
	}
	/**
	 * Funcion para buscar datos 'ListaDocumentos.php'
	 * @author EQUIPO 4
	 * DEPENDIENDO DEL VALOR INGRESADO: numero, fecha o nombre los analiza y busca, si lo encuentra lo retorna
	 */
	public function buscador($dato) {
		$this->db->where('status', false);
		$this->db->like('matricula', $dato);
		$this->db->or_like('alumno', $dato);
		$this->db->or_like('fechaCarg', $dato);
		$this->db->order_by('fechaCarg','asc');
		return $this->db->get('documentose4')->result(); //retornamos la info encontrada en un array y se envia a documentos
	}//End 

	public function actualizar_documento($id, $titulo, $fechaCarg, $status, $url, $matricula, $alumno, $urlfirmado){
		$this->db->where('IdDocumento', $id);
		$this->db->set('titulo', $titulo);
		$this->db->set('fechaCarg', $fechaCarg);
		$this->db->set('status', $status);
		$this->db->set('url', $url);
		$this->db->set('matricula', $matricula);
		$this->db->set('alumno', $alumno);
		$this->db->set('urlfirmado', $urlfirmado);
		return $this->db->update('documentose4');
	}

	public function insertar_documento($titulo, $fechaCarg, $status, $url, $matricula, $alumno, $urlfirmado){
		$this->db->set('titulo', $titulo);
		$this->db->set('fechaCarg', $fechaCarg);
		$this->db->set('status', $status);
		$this->db->set('url', $url);
		$this->db->set('matricula', $matricula);
		$this->db->set('alumno', $alumno);
		$this->db->set('urlfirmado', $urlfirmado);
		return $this->db->insert('documentose4');
	}

	public function eliminar_documento($id){
		$this->db->where('IdDocumento', $id);
		return $this->db->delete('documentose4');
	}
}