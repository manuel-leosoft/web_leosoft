<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//  CI 2.0 Compatibility
if(!class_exists('CI_Model')) { class CI_Model extends Model {} }


class Plantilla extends CI_Model
{
	public function __construct()
	{
		//parent::__construct();
                $this->load->database();
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
        
        public function mas_visitas($id)
        {
            $consulta = "SELECT visitas FROM plantilla WHERE id=$id";
            $resultado = $this->db->query($consulta);
            foreach($resultado->result() as $fila)
            {
                $visitas = $fila->visitas;
            }
            
            $visitas = $visitas + 1;
            
            $consulta = "UPDATE plantilla SET visitas = $visitas WHERE id=$id";
            $this->db->query($consulta);
        }
        
}
