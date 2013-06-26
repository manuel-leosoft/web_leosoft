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
        
        function contador_numero_plantillas()
        {
            $this->load->helper('url');   
            $this->load->database();
            $this->load->model("Plantilla");
            
            $cadena = "";
            foreach($_POST as $nombre_campo => $valor){ 
               $cadena = $cadena."tema='$valor'||"; 
            } 
            $cadena = substr($cadena,0,strlen($cadena)-2);
           
            $resultado = $this->Plantilla->numero_plantillas($cadena);
            
            if($resultado==0)
            {
                echo "No hay plantillas para los temas seleccionados. Pulse siguiente para ver todas nuestras plantillas.";
            }
            else
            {
                echo "Hay un total de <span class='letra_azul' style='font-size:1.2em;'>".$resultado." </span>plantillas para los temas seleccionados.";
            }
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