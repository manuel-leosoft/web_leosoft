<?php


    $tipo_web = array("html", "flash");
    
    //construir la consulta con los valores que vienen del formulario
    //hay dos por si la primera no encuentra resultados se muestran todas las plantillas
    $consulta = "SELECT * FROM plantilla WHERE";
    $consulta_todas = "SELECT * FROM plantilla";
    
    $dirRetorno = "";
    
    /*if(isset($_GET["listaPlantillas"])){
        $plantillas = $_GET["listaPlantillas"];
        //contador para saber si es el primer tema que lee
        $contador=1;
        foreach($plantillas as $value){
            if($contador==1){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                $consulta=$consulta." tema="."'$value'";
                $contador++;
            }
            else {
                 $consulta=$consulta." OR tema="."'$value'";
            }
            $dirRetorno = $dirRetorno."listaPlantillas[]=$value&";
        }
    }
    
    if(isset($_GET["listaTipos"])){
        $tipos = $_GET["listaTipos"];
        //contador para saber si es el primer tipo que lee
        $contador=1;
        foreach($tipos as $value){
            if($contador==1){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                if(!isset($_GET["listaPlantillas"])){
                    $consulta=$consulta." tipo="."'$value'";
                }
                else{
                    $consulta=$consulta." OR tipo="."'$value'";
                }
                $contador++;
            }
            else{
                 $consulta=$consulta." OR tipo="."'$value'";
            }
            $dirRetorno = $dirRetorno."listaTipos[]=$value&";
        }
    }*/
    
    //CODIGO PARA LOS ENLACES DIRECTOS
    if(isset($_GET["tipo"])){
        $tipo = $_GET["tipo"];
        if($tipo == "web"){
            foreach ($tipo_web as $valor){
                $consulta = $consulta." tipo = '$valor' OR";
            }
        }
        $consulta = substr($consulta,0,strlen($consulta)-2);
    }
    
    
    //CODIGO PARA MOSTRAR TODAS LAS PLANTILLAS
    if(isset($_GET["todas"])){
        $consulta = $consulta_todas;
    }
    
    
    if(isset($_GET["listaPlantillas"])){
        $plantillas = $_GET["listaPlantillas"];
        //contador para saber si es el primer tema que lee
        $contador=1;
        foreach($plantillas as $value){
            if(($contador==1)||(count($plantillas)==1)){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                $consulta=$consulta." (tema="."'$value'";
                $contador++;
                if(count($plantillas)==1){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                    $consulta=$consulta.")";
                    $contador++;
                }
            }
            else if($contador==count($plantillas)){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                $consulta=$consulta." OR tema="."'$value')";
                $contador++;
            }
            else {
                 $consulta=$consulta." OR tema="."'$value'";
                 $contador++;
            }
            $dirRetorno = $dirRetorno."listaPlantillas[]=$value&";
        }
    }
    
    if(isset($_GET["listaTipos"])){
        $tipos = $_GET["listaTipos"];
        //contador para saber si es el primer tipo que lee
        $contador=1;
        foreach($tipos as $value){
            if($contador==1){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                if(!isset($_GET["listaPlantillas"])){
                    $consulta=$consulta." (tipo="."'$value'";
                }
                else{
                    $consulta=$consulta." AND (tipo="."'$value'";
                }
                if(count($tipos)==1){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                    $consulta=$consulta.")";
                    $contador++;
                }
                $contador++;
            }
            else if($contador==count($tipos)){//si es el primer tema que lee -> no hay que poner el OR en la consulta
                $consulta=$consulta." OR tipo="."'$value')";
                $contador++;
            }
            else{
                 $consulta=$consulta." OR tipo="."'$value'";
                 $contador++;
            }
            $dirRetorno = $dirRetorno."listaTipos[]=$value&";
        }
    }
    
    $_SESSION["dirRetorno"] = $dirRetorno;
    
    //si no existe la variable ordenar -> se ordena por tema
    if(!isset($_GET["ordenar"])){
        $consulta=$consulta." order by tema";
        $consulta_todas=$consulta_todas." order by tema";
        $tipo_orden = "tema";
    }
    //en este caso existe la variable ordenar y se ordena por tipo
    else if($_GET["ordenar"]=='tipo'){
        $consulta=$consulta." order by tipo";
        $consulta_todas=$consulta_todas." order by tipo";
        $tipo_orden = "tipo";
    }
    //en este caso existe la variable ordenar y se ordena por tipo
    else if($_GET["ordenar"]=='popular'){
        $consulta=$consulta." order by visitas desc";
        $consulta_todas=$consulta_todas." order by visitas desc";
        $tipo_orden = "popularidad";
    }
    ?>
    
    <!--div en el que se van a colocar las imagenes de la plantilla-->
    <div id="contenedor_plantillas">
    <div class="letra_naranja" style="display:block;float:right;padding-top:20px;font-size:0.9em;margin-right:10px;">
        Ordenado por <span class="letra_azul"><?php echo $tipo_orden; ?></span> de plantilla
         <select name="ordenar_por" id="ordenar_por" onchange="ordenar(this.value);">
          <option value="inicio">Ordenar por</option>
          <option value="tema">Tema</option>
          <option value="tipo">Tipo</option>
          <option value="popular">Popular</option>
        </select>
    </div>
    <?php
    
    //Se guarda el resultado de la consulta y el numero de filas devueltas
    $resultado = $this->Plantilla->mostrar_plantillas($consulta);
    $num_rows = $this->Plantilla->numero_filas($resultado);
    //$this->Plantilla->mas_visitas();
    
        
        if($num_rows==0){//si no hay plantillas del tema seleccionado -> mostrar todas
            echo "<br><span class='letra_azul'>NO SE ENCONTRARON PLANTILLAS DEL TEMA SELECCIONADO</span><br><br>";
            
            $resultado = $this->Plantilla->mostrar_plantillas($consulta_todas);
            $num_rows = $this->Plantilla->numero_filas($resultado);
        }
        
    
        ?>
        <?php
        echo "<br><span class='letra_azul'>NUMERO DE PLANTILLAS: </span><span class='letra_naranja' style='font-size:1.5em;'>".$num_rows."</span><br><br>"; 
        foreach ($resultado->result() as $fila){
            //vista previa de la plantilla
            $p = base_url().$fila->vistaPrevia;
            $vista_previa = "showtrail(0,0,'$p');";
            $ruta = $fila->ruta;
            $id = $fila->id;
        ?>
        <div id="vista_previa">
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
            <span style="margin-left:10px">Tema: <a href="plantilla2.php?listaPlantillas[]=<?php echo $fila->tema; ?>"><?php echo $fila->tema; ?></a></span><br>
            <span style="margin-left:10px">Precio: <span class="tipo"> <?php echo $fila->precio; ?>&euro;</span></span><br>
            <span style="margin-left:10px">Ref: <span class="tipo" style="font-size:0.9em;"> <?php echo $fila->referencia; ?></span></span><br>
            <span style="margin-left:10px">Visitas: <span class="tipo"> <?php echo $fila->visitas; ?></span></span>
        </div>
        <?php
        }
        ?>

        <div style="clear:both;"></div>
    </div>
        
