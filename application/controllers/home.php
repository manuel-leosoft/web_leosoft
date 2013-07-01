<?php
class Home extends CI_Controller {

	public function inicio(){
		$this->load->helper('url');  
                $this->load->database();
                $this->load->model("Plantilla");
                $plantilla = new $this->Plantilla();
                $this->session->set_userdata('url',base_url());
                $data['title'] = 'Plantillas';
                $data['main_content'] = 'plantillas';
                $this->load->view('index.php',$data);
	}
public function quienes_somos(){
		$this->load->helper('url');  
		$data['title'] = 'Quienes somos';
		$data['main_content'] = 'quienes_somos';
		$this->load->view('index.php',$data);
	}
public function contacto(){
		$this->load->helper('url');  
		$data['title'] = 'Contacto';
		$data['main_content'] = 'contacto'; 
		$data['ok'] ='0';
		$this->load->view('index.php',$data);
	}
public function presupuesto(){
		$this->load->helper('url');  
		$data['title'] = 'Presupuesto';
		$data['main_content'] = 'presupuesto';
		$this->load->view('index.php',$data);
	}
	
function su_presupuesto()
    {
		$this->load->helper('url');  
		$data['title'] = 'Su presupuesto';
		$data['main_content'] = 'su_presupuesto';
		$this->load->view('index.php',$data);
         
             
 
	}
}
	
	
	

?>