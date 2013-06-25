<?php
class Plantillas extends CI_Controller {

        public function mostrar(){
            $this->load->helper('url');  
            $this->load->database();
            $this->load->model("Plantilla");
            $plantilla = new $this->Plantilla();
            $data['title'] = 'Plantillas';
            $data['main_content'] = 'plantillas';
            $this->load->view('index.php',$data);
        }
        
        function contar_numero_plantillas()
        {
            $this->load->helper('url');  
            $this->load->database();
            $this->load->model("Plantilla");
            $this->load->view('php/contar_numero_plantillas.php');
        }
        
        
        function demo()
        {
            $this->load->helper('url');  
            $data['title'] = 'Demo Plantilla';
            $this->load->view('demo.php');
        }
        
        public function contador_visitas_plantilla()
        { 
            $this->load->helper('url');  
            $this->load->database();
            $this->load->model("Plantilla");
            $id = $_GET['id'];
            $this->Plantilla->mas_visitas($id);
        }

}
	
	
	

?>