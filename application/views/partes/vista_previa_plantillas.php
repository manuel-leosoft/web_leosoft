<?php
    $contador = 1;
        
    foreach ($resultado->result() as $fila){
        //vista previa de la plantilla
        $p = base_url().$fila->vistaPrevia;
        $vista_previa = "showtrail(0,0,'$p');";
        $ruta = $fila->ruta;
        $id = $fila->id;
    ?>
    <div class="vista_previa" id=<?php echo "vista_previa".$contador?>>
    <?php 
        if(isset($prueba)&&($prueba==1)){
    ?>
    <img style="position:relative;top:40px;left:140px;" src="../../imagenes/medalla.png" >
    <?php
    }
    ?>
        <img class="vista_previa_plantilla" src='<?php echo base_url().$fila->vistaPrevia_m; ?>' onmouseover="<?php echo $vista_previa ?>" onmouseout="hidetrail();"/>
        <div id="demo" class="barra_descarga_demo">
            <a class="enlace_demo_descargar" href="javascript:void(window.open('<?php echo base_url()?>index.php/plantillas/demo?plantilla=<?php echo $ruta; ?>&&id=<?php echo $id; ?>','Demo plantilla','resizable=no,location=no,menubar=no, scrollbars=no,status=no,toolbar=no,fullscreen=yes,dependent=no,width=980,height=800,left=100,top=100' ))">Demo</a> | 
            
            <?php 
            if (!isset($_SESSION['carro'][$fila->id])){
            ?>
                <a onclick="carrito('add',<?php echo $fila->id ?>);" class="enlace_demo_descargar" href="#">A&ntilde;adir carro</a>
            <?php
            }
            else{
            ?>
                <a onclick="carrito('remove',<?php echo $fila->id ?>);" class="enlace_demo_descargar" href="#">Eliminar</a>
            <?php
            }
            ?>
        </div>
        <span style="margin-left:10px">Tipo: <span class="tipo"> <?php echo $fila->tipo; ?></span></span><br>
        <span style="margin-left:10px">Tema: <a href="<?php echo base_url();?>index.php/plantillas/mostrar?listaPlantillas[]=<?php echo $fila->tema; ?>"><?php echo $fila->tema; ?></a></span><br>
        <span style="margin-left:10px">Precio: <span class="tipo"> <?php echo $fila->precio; ?>&euro;</span></span><br>
        <span style="margin-left:10px">Ref: <span class="tipo" style="font-size:0.9em;"> <?php echo $fila->referencia; ?></span></span><br>
        <span style="margin-left:10px">Visitas: <span class="tipo"> <?php echo $fila->visitas; ?></span></span>
    </div>
    <?php
    if($contador%4==0){
        $id_vista_previa = "#vista_previa".$contador;
    ?>
    
    <script>
        var id_vista_previa = "<?php echo $id_vista_previa; ?>";
        $(id_vista_previa).addClass("no_borde_derecho_plantilla");
    </script>
                    
    <?php
    echo "<div style='border-bottom:1px dotted #d0d0d0;clear:both;padding-right:10px;'></div>";
    }
    $contador++;
    }//FIN FOREACH
    ?>

        <div style="clear:both;"></div>