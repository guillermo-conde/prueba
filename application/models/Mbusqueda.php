<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*-------------------------------------------------------------------------
* Historial de archivos firmados
* ------------------------------------------------------------------------
*
*
* @author Equipo 5
*
*/
class Mbusqueda extends CI_Model{

	/**
     * Obtener datos del estudiante
     *
     * @return  array
     */
    public function obtener_datos()
    {
        return $this->db->select('*')->from('estudiante')->where('matricula',1112224455)->get()->result();
    }

    /**
     * Obtener periodos.
     *
     * @return  array
     */
    public function obtener_periodo()
    {
        return $this->db->select('*')->from('periodos')->order_by('IdPeriodo', 'DESC')->get()->result();
    }

      /**
     * Obtener documentos.
     *
     * @return  array
     */
    public function obtener_documentos()
    {
        return $this->db->select('*')->from('documentos')->get()->result();
    }


          /**
     * Obtener materias.
     *
     * @return  array
     */
    public function obtener_alumno()
    {
        return $this->db->select('*')->from('estudiante')->where('matricula',1112224455)->get()->result();
    }

}