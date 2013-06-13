<?php
    $data['title']=$title;
    $this->load->view("partes/head.php");
?>
<!-- ************************ FIN HEAD ****************************-->
<body>
  
    <div id="contenedor">
        
        <!-- ************************ REDES SOCIALES ****************************-->
        <?php
            $this->load->view("partes/redes_sociales.php");
        ?>
        <!-- ************************ FIN REDES SOCIALES ****************************-->
        
        <!-- ************************ CABECERA ****************************-->
        <?php
             $this->load->view("partes/cabecera.php");
        ?>
        <!-- ************************ FIN CABECERA ****************************-->
        
        <!-- ************************ SLIDER ****************************-->
        <?php
             $this->load->view("partes/slider.php");
        ?>
        <!-- ************************ FIN SLIDER ****************************-->
        
        <div id="contenedor_bloques">
            <div class="bloque_index_color" id="bloque_izquierdo">
                <h1 class="titulo_bloque"><span class="letra_azul">h</span>osting</h1>
                <span class="contenido_bloque">
                    Pruebe su alojamiento gratis durante 30 d&iacute;as. Tan solo &uacute;selo y si no est&aacute; conforme, no pague.
                </span>
            </div>
            
            <div class="bloque_index_color" id="bloque_centro">
                <h1 class="titulo_bloque"><span class="letra_azul">c</span>rm</h1>
                <span class="contenido_bloque">Gesti&oacute;n y facturaci&oacute;n basado en web, sin instalaci&oacute;n en su ordenador, 
                se accede mediante el navegador. <br><br>Escalable, intuitivo, completo. Es la mejor herramienta para controlar su negocio. 
                Acceda a su negocio en tiempo real desde cualquier parte del mundo.

                </span>
            </div>
            
            <div class="bloque_index_color" id="bloque_derecho">
                 <h1 class="titulo_bloque"><span class="letra_azul">p</span>lantillas</h1>
                <span class="contenido_bloque">
                    Con un dise&ntilde;o prefabricado, puede modificarla a su gusto:
                    <ul>
                        <li>A&ntilde;adiendo su logotipo.</li>
                        <li>Cambiando los colores.</li>
                        <li>Introduciendo su propio texto, formularios, etc.</li>
                        <li>A&ntilde;adiendo sus propias im&aacute;genes.</li>
                        <li>Incorporando audios, v&iacute;deos, etc.</li>
                    </ul>
                </span>
            </div>
            <div style="clear:both"></div>
        </div>
        
        <!-- ************************ SLIDER ****************************-->
        <?php
             $this->load->view("partes/pie.php");
        ?>
        <!-- ************************ FIN SLIDER ****************************-->
                
    </div>  
     

  </body>
</html>