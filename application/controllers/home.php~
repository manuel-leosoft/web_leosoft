<?php
class Home extends CI_Controller {


       /*function __construct()
	{
		parent::__construct();
		
		$this->load->helper('language'); 
                $this->lang->load('langue');  
		$idioma =base_url()."index.php/".substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2)."/";
                $this->session->set_userdata('idioma',$idioma);
		$this->load->helper('url');
	}*/


	public function inicio(){

                

		
                 
                $this->lang->load('langue');  
                //$this->load->helper('url'); 
                $idioma =base_url()."index.php/".substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2)."/";
                
                $this->load->library('session');
                $this->session->set_userdata('idioma',$idioma);
                $data['idioma'] = $idioma;
                //echo $this->session->userdata('idioma');
               //echo $idioma;
 
		$data['title'] = 'Home';
		$data['main_content'] = 'principal'; 
		$this->load->view('index.php',$data);
	}
public function quienes_somos(){
                $this->load->helper('language'); 
                $this->lang->load('langue');  
		$this->load->helper('url');  
		$data['title'] = 'Quienes somos';
		$data['main_content'] = 'quienes_somos';
		$this->load->view('index.php',$data);
	}
public function contacto(){
		
               $this->lang->load('langue');  
		 
		$data['title'] = 'Contacto';
		$data['main_content'] = 'contacto'; 
		$data['ok'] ='0';
		$this->load->view('index.php',$data);
	}
public function presupuesto(){
		 $this->lang->load('langue');
		$data['title'] = 'Presupuesto';
		$data['main_content'] = 'presupuesto';
		$this->load->view('index.php',$data);
	}
public function plantillas(){
		$this->lang->load('langue');
		$data['title'] = 'Plantillas';
		$data['main_content'] = 'plantillas';
		$this->load->view('index.php',$data);
	}
	
function su_presupuesto()
    {
		$this->lang->load('langue');
		$data['title'] = 'Su presupuesto';
		$data['main_content'] = 'su_presupuesto';
		$this->load->view('index.php',$data);
         
             
 
	}

}
	
	
	

?>
