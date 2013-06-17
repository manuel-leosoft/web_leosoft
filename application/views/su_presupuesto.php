<?php
    session_start();
    include("partes/head.php");
?>
<!-- ************************ FIN HEAD ****************************-->
<body>
  
    <div id="contenedor">
    
        <!-- ************************ REDES SOCIALES ****************************-->
        <?php
           include("partes/redes_sociales.php");
        ?>
        <!-- ************************ FIN REDES SOCIALES ****************************-->
        
        <!-- ************************ CABECERA ****************************-->
        <?php
            include("partes/cabecera.php");
        ?>
        <!-- ************************ FIN CABECERA ****************************-->
        
        <!-- ************************ CONTENIDO ****************************-->
        <div id="contenido">
            <span class="ruta">Inicio <span class="letra_naranja">></span> Su presupuesto</span>
            <img class="barra" src="imagenes/linea.png" height=3px width="100%" />
            <div class="texto_contenido" style="width:100%;" id="texto_presupuesto">
                <?php
                    include("partes/enviar_formulario_presupuesto.php");
                ?>
                <div class="datos_presupuesto">
                    <span class="letra_azul">Datos generales</span><br>
                    Empresa: <span class="letra_naranja"> <?php echo $empresa ?> </span><br>
                    Persona contacto: <span class="letra_naranja"> <?php echo $persona ?> </span><br>
                    Telefono contacto: <span class="letra_naranja"> <?php echo $telefono ?> </span><br>
                    Email contacto: <span class="letra_naranja"> <?php echo $email ?> </span><br>
                    Detalles: <span class="letra_naranja"> <?php echo $consulta ?> </span><br>
                    
                    <img src="imagenes/uppostit.png"/>
                    <div id="precio_presupuesto">
                    <table>
                    <tr>
                    <?php
                    ?>
                    
                    <td width=250>Total desarrollo:</td><td><span> <?php echo $presupuesto."&euro;"; //mostrar la variable presupuesto?></span></td>
                    
                    </tr>
                    <?php
                    if($mantenimiento=="mantenimiento_SI"){
                        echo "<tr>";
                        $mantenimiento_periodico = $_POST["mantenimiento_periodico"];
                        echo "<td width=250>Mantenimiento cada ".$mantenimiento_periodico.": </td><td><span>".$precio_mantenimiento."&euro;</span></td>";
                        echo "</tr>";
                    }

                    if($hosting=="hosting_SI"){
                        echo "<tr>";
                        echo "<td width=250>Hosting mensual: </td><td><span>".$precio_hosting."0&euro;</span></td>";
                        echo "</tr>";
                    }
                    ?>
                    </table>
                    </div>
                    
                    <img src="imagenes/downpostit.png"/>                    
                    
                </div>
                
                <div class="datos_presupuesto">
                    <span class="letra_azul">Funciones seleccionadas</span><br>
                   N&uacute;mero de idiomas:  <span class="letra_naranja"> <?php echo $numero_idiomas; 
                    for($i=0;$i<$numero_idiomas;$i++){
                        if($lista_idiomas[$i]=="spanol"){ 
                            echo " Espa&ntilde;ol";
                            $spanol=1;
                        }
                        if($lista_idiomas[$i]=="ingles"){ 
                            echo " Ingl&eacute;s";
                            $ingles=1;
                        }
                        if($lista_idiomas[$i]=="frances"){ 
                            echo " Franc&eacute;s";
                            $frances=1; 
                        }
                    }
                   ?> </span><br>
                   N&uacute;mero de secciones:  <span class="letra_naranja"> <?php echo $numero_secciones ?> </span><br>
                   <?php
                    if($usuarios=="usuarios_SI"){
                    ?>
                     Gestor de usuarios (login/password):  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($noticias=="noticias_SI"){
                    ?>
                     Gestor de noticias:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($novedades=="novedades_SI"){
                    ?>
                     Aviso de novedades a usuarios:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($contacto=="contacto_SI"){
                    ?>
                     Formulario de contacto:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($mapa=="mapa_SI"){
                    ?>
                      Mapa de localizaci&oacute;n:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($galeria=="galeria_SI"){
                    ?>
                     Galer&iacute;a de im&aacute;genes/v&iacute;deos:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($banners=="banners_SI"){
                    ?>
                     Gesti&oacute;n de banners:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($smart_phone=="telefono_SI"){
                    ?>
                     Adaptar web a formato smart phone:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($mantenimiento=="mantenimiento_SI"){
                        $man_periodico = $_POST["mantenimiento_periodico"];
                    ?>
                     Mantenimiento peri&oacute;dico:  <span class="letra_naranja"> S&Iacute;, cada  <?php echo $man_periodico; ?> </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($imagen=="imagen_SI"){
                    ?>
                     Imagen corporativa:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                   <?php
                    if($hosting=="hosting_SI"){
                    ?>
                     Servicio de hosting:  <span class="letra_naranja"> S&Iacute; </span><br>
                    <?php
                    }
                   ?>
                    <?php $dir="php/generar_pdf.php?precio=$presupuesto&empresa=$empresa&persona=$persona&telefono=$telefono&email=$email&idiomas=$idiomas&espanol=$spanol&ingles=$ingles&frances=$frances&secciones=$secciones&numsecciones=$numero_secciones&usuarios=$usuarios&noticias=$noticias&novedades=$novedades&contacto=$contacto&mapa=$mapa&galeria=$galeria&banners=$banners&smart_phone=$smart_phone&mantenimiento=$mantenimiento&periodico=$man_periodico&imagen=$imagen&hosting=$hosting"?>
                    <?php $dir2="precio=$presupuesto&empresa=$empresa&persona=$persona&telefono=$telefono&email=$email&idiomas=$idiomas&espanol=$spanol&ingles=$ingles&frances=$frances&secciones=$secciones&numsecciones=$numero_secciones&usuarios=$usuarios&noticias=$noticias&novedades=$novedades&contacto=$contacto&mapa=$mapa&galeria=$galeria&banners=$banners&smart_phone=$smart_phone&mantenimiento=$mantenimiento&periodico=$man_periodico&imagen=$imagen&hosting=$hosting"?>
                    <!--<a class="pdf" target="_blank" href=<?php echo $dir ?>><img src="imagenes/generar_pdf.png"/></a>-->
                    <img class="pdf" src="imagenes/Generar_pdf.png" id="generar_pdf"/>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $("#generar_pdf").click(function() {
                            var params="<?php echo $dir2; ?>";
                           
                                    
                                $.ajax({ 
                                        async: false,
                                        type: "GET",
                                        url: "php/generar_pdf.php",
                                        data: params,
                                        success: function(html){
                                            //$("#mensaje_pdf").css("display","block");
                                            $("#mensaje_pdf").fadeIn('500').html(html).css("display","block");
                                            setTimeout(function(){$("#mensaje_pdf").html('&nbsp;').css("display","none")},5000);//borramos el mensaje en 5s
                                        }
                                });
                            });
                    });
                    </script>
                    
                </div>
               
            </div>
           
             <div style="clear:both"></div>  
              <div style="display:none;"id="mensaje_pdf"></div>       
        </div>
        
        <!-- ************************ FIN CONTENIDO ****************************-->
        
         <!-- ************************ PIE ****************************-->
        <?php
            include("partes/pie.php");
        ?>
        <!-- ************************ FIN PIE ****************************-->
        
    </div>  
     

  </body>
</html>