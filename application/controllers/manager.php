<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! class_exists('Controller'))
{
	class Controller extends CI_Controller {}
}

class Manager extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('url');
	}
	
	//redirect if needed, otherwise display the user list
	function index()
	{
	   $data['title']='';	
	   $data['contenido']=''; 
       $this->load->view('/manager/manager.php',$data);		
	}
	function resumen(){
		$data['title']='Administracion';	
	   $data['contenido']='resumen'; 
	   $this->load->view('/manager/manager.php',$data);
	}
}