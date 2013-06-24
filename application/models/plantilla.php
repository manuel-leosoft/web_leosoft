<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//  CI 2.0 Compatibility
if(!class_exists('CI_Model')) { class CI_Model extends Model {} }


class Plantilla extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        public function numero_plantillas_tipo()
        {
            return $this->db->get('plantilla')->num_rows();
        }
        
        public function mostrar_plantillas($consulta)
        {
            return $this->db->query($consulta);
        }
        
        
        public function numero_filas($resultado)
        {
            return $resultado->num_rows();
        }
        
}
