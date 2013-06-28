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
            $cadena_tipo = "";
            $cadena_tema = "";
            $tipos = array("html","joomla","wordpress");
            foreach($_POST as $nombre_campo => $valor){
                /*if(in_array($valor,$tipos)){
                    $cadena = $cadena."tipo='$valor'||"; 
                }
                else{
                    $cadena = $cadena."tema='$valor'||"; 
                }*/
                if(in_array($valor,$tipos)){
                    $cadena_tipo = $cadena_tipo."tipo='$valor'||"; 
                }
                else{
                    $cadena_tema = $cadena_tema."tema='$valor'||"; 
                }
            } 
            $cadena_tipo = substr($cadena_tipo,0,strlen($cadena_tipo)-2);
            $cadena_tema = substr($cadena_tema,0,strlen($cadena_tema)-2);
            if(strlen($cadena_tipo)==0){
                $cadena = $cadena_tema;
            }
            if(strlen($cadena_tema)==0){
                $cadena = $cadena_tipo;
            }
            if((strlen($cadena_tema)!=0)&&(strlen($cadena_tipo)!=0)){
                $cadena = "(".$cadena_tipo.")AND(".$cadena_tema.")";
            }
            //$cadena = substr($cadena,0,strlen($cadena)-2);
           
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