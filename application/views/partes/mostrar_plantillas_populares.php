<?php
    
    //Consulta para que muestre las plantillas m‡s vistas
    $consulta = "SELECT * FROM plantilla ORDER BY visitas DESC LIMIT 8";
    
    //si no existe la variable ordenar -> se ordena por tema
    /*if(!isset($_GET["ordenar"])){
        $consulta=$consulta." order by tema";
        $consulta_todas=$consulta_todas." order by tema";
        $tipo_orden = "tema";
    }
    //en este caso existe la variable ordenar y se ordena por tipo
    else{
        $consulta=$consulta." order by tipo";
        $consulta_todas=$consulta_todas." order by tipo";
        $tipo_orden = "tipo";
    }*/
    ?>
    
    
    <!--<div class="letra_naranja" style="display:block;float:right;padding-top:20px;font-size:0.9em;margin-right:10px;">
        Ordenado por <span class="letra_azul"><?php echo $tipo_orden; ?></span> de plantilla
         <select name="ordenar_por" id="ordenar_por" onchange="ordenar(this.value);">
          <option value="inicio">Ordenar por</option>
          <option value="tema">Tema</option>
          <option value="tipo">Tipo</option>
        </select>
    </div>-->
    <?php
    
    //Se guarda el resultado de la consulta y el numero de filas devueltas
    $resultado = $this->Plantilla->mostrar_plantillas($consulta);
    $num_rows = $this->Plantilla->numero_filas($resultado);
    //$this->Plantilla->mas_visitas();
    
        
        /*if($num_rows==0){//si no hay plantillas del tema seleccionado -> mostrar todas
            echo "<br><span class='letra_azul'>NO SE ENCONTRARON PLANTILLAS DEL TEMA SELECCIONADO</span><br><br>";
            
            $resultado = $this->Plantilla->mostrar_plantillas($consulta_todas);
            $num_rows = $this->Plantilla->numero_filas($resultado);
        }*/
        
    
        ?>
        <!--div en el que se van a colocar las imagenes de la plantilla-->
        <div id="contenedor_plantillas" style="clear:both;">
            <?php
            $prueba = 1;
             include("vista_previa_plantillas.php");
             ?>
        </div>
        
