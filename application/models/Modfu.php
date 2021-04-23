<?php

defined ('BASEPATH') OR exit ('No direct script access allowed');

/**Modelo para documentosafirmarusuarios
 *Aqui tendremos informacion hacer de los documentos a firma
 * @author Equipo
 * */
class modfu extends CI_Model{
    function __construct(){
		parent::__construct();
        $this->load->database();
	}
    function obtenerdato(){
        $query = $this->db->get('files');
        if($query->num_rows()>0) return $query;
        else return false;
    }
}
?>
