
        <div id="contenido">
            <!--<span class="ruta">Inicio <span class="letra_naranja">></span> Plantilla</span>
            <img class="barra" src="imagenes/linea.png" height=3px width=550px />-->
            
            <?php
                if((!isset($_GET["listaPlantillas"]))&&(!isset($_GET["listaTipos"]))&&(!isset($_GET["todas"]))&&(!isset($_GET["tipo"]))){
                     
                    //VISTA PARA MOSTRAR EL BOTîN PARA EL DOMINIO
                    $this->load->view('partes/dominio');
                    //$this->load->view('partes/formulario_plantillas');
            ?>
                <div id="error_plantilla"  style="clear:both;">Seleccione al menos un tema para su plantilla.</div>
                <div id="numero_plantillas"  style="clear:both;"></div>
            <?php
                    //VISTA PARA MOSTRAR LAS PLANTILLAS MçS POPULARES
                    $this->load->view('partes/mostrar_plantillas_populares');
                }
                else{
                    $this->load->view('partes/mostrar_plantillas');
                }
            ?>
        </div>
            
        <div style="clear:both;"></div>
      