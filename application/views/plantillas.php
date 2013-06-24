
        <div id="contenido">
            <!--<span class="ruta">Inicio <span class="letra_naranja">></span> Plantilla</span>
            <img class="barra" src="imagenes/linea.png" height=3px width=550px />-->
            
            <?php
                if(!isset($_GET["listaPlantillas"])){
                    $this->load->view('partes/formulario_plantillas');
                }
                else{
                    $this->load->view('partes/mostrar_plantillas');
                }
            ?>
        </div>
        
        <div id="error_plantilla">Seleccione al menos un tema para su plantilla.</div>
            
        <div style="clear:both;"></div>
      