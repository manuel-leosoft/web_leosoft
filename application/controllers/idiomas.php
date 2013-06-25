<?php
class Idiomas extends CI_Controller 
{

      
	public function ingles()
        {

           $idioma =base_url()."index.php/en/";
           $this->lang->load('langue');  
           $this->load->library('session');
           $this->session->set_userdata('idioma',$idioma);
           redirect($_GET['b']);
          
        }
	public function frances()
        {
             $idioma =base_url()."index.php/fr/";  
             $this->lang->load('langue');  
             $this->load->library('session');
             $this->session->set_userdata('idioma',$idioma);
             redirect($_GET['a']);
        }  
       public function espanol()
       {
             $idioma =base_url()."index.php/es/";  
             $this->lang->load('langue');  
             $this->load->library('session');
             $this->session->set_userdata('idioma',$idioma);
             redirect($_GET['c']);
        } 
               

                 
              
}
?>
