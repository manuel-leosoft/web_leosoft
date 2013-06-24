<?php
class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
   function index()
	{


		$this->load->helper('url');  
		$data['title'] = 'Contacto';
		$data['main_content'] = 'contacto'; 
		$data['ok']=0;
		$this->load->view('index.php',$data);
	}
	
	function enviar()
    {
    $this->load->library('email','','correo'); 
 	$this->load->library('form_validation');
    $this->load->helper('url');

	$this->form_validation->set_rules('nombre','Nombre','trim|required|xss_clean');
	$this->form_validation->set_rules('email','Email','required|valid_email');
	$this->form_validation->set_rules('cuerpo','Cuerpo del mensaje','required|xss_clean');
	
    
	
	if (!$this->form_validation->run()){
	
		$data['title'] = 'Contacto';
		$data['main_content'] = 'contacto'; 
		$data['ok']=2;
		$this->load->view('index.php',$data);
		
	}else{
		
		 
		 $this->correo->from($_POST['email'],$_POST['nombre']);
		 $this->correo->to("gomnram@hotmail.com");
		 $this->correo->subject('Consulta Leosoft');
		 $this->correo->message("Nombre:". $_POST['nombre']."<br />
             Email:" .$_POST['email']. "<br />
             Mensaje:" .$_POST['cuerpo']. "<br />");

		 $data['title'] = 'Contacto';
		$data['main_content'] = 'contacto'; 
		if  ($this->correo->send()){
		  $data['ok']=1;
		}else{
	     $data['ok']=2;
		}
      
         		$this->load->view('index.php',$data);

         
             
 
	}

}


}
?>