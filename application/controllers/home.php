<?php
class Home extends CI_Controller {

	public function inicio(){
		$this->load->helper('url');  
		$data['title'] = 'Home';
		$data['main_content'] = 'principal'; 
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
		$this->load->view('index.php',$data);
	}
public function presupuesto(){
		$this->load->helper('url');  
		$data['title'] = 'Presupuesto';
		$data['main_content'] = 'presupuesto';
		$this->load->view('index.php',$data);
	}
public function plantillas(){
		$this->load->helper('url');  
		$data['title'] = 'Plantillas';
		$data['main_content'] = 'plantillas';
		$this->load->view('index.php',$data);
	}
	

}
?>