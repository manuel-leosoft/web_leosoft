<?php
class Idiomas extends CI_Controller {


       /*function __construct()
	{
		parent::__construct();
		
		$this->load->helper('language'); 
                $this->lang->load('langue');  
		$idioma =base_url()."index.php/".substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2)."/";
                $this->session->set_userdata('idioma',$idioma);
		$this->load->helper('url');
	}*/


	 public function ingles()
        {

           $idioma =base_url()."index.php/en/";
           $this->lang->load('langue');  
           $this->load->library('session');
           $this->session->set_userdata('idioma',$idioma);
           $data['idioma'] = $idioma;
           $data['title'] = 'Home';
	   $data['main_content'] = 'principal'; 
	   $this->load->view('index.php',$data);
        }
        
	public function frances()
        {
             $idioma =base_url()."index.php/fr/";  
             $this->lang->load('langue');  
             $this->load->library('session');
             $this->session->set_userdata('idioma',$idioma);
             $data['idioma'] = $idioma;
             $data['title'] = 'Home';
	     $data['main_content'] = 'principal'; 
             $this->load->view('index.php',$data);
          }  
       public function espanol()
        {
             $idioma =base_url()."index.php/es/";  
             $this->lang->load('langue');  
             $this->load->library('session');
             $this->session->set_userdata('idioma',$idioma);
             $data['idioma'] = $idioma;
             $data['title'] = 'Home';
	     $data['main_content'] = 'principal'; 
	     $this->load->view('index.php',$data);
       } 
               

                 
                /*$this->lang->load('langue');  
                
                
                $this->load->library('session');
                $this->session->set_userdata('idioma',$idioma);
                $data['idioma'] = $idioma;
               
		$data['title'] = 'Home';
		$data['main_content'] = 'principal'; 
		$this->load->view('index.php',$data);*/
	//}
}
?>
