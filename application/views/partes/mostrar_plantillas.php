<?php

//--------------------- PAGINADOR ------------------------
//numero de plantillas mostradas
$limit = 8;
// pagina pedida
if(!isset($_GET["pag"])){
    $pag=0;
}
else{
    $pag = (int) $_GET["pag"];
}

if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;

$parametros = ""; //variable para guardar los parametros pasados por url para hacer el paginador

//*******************************************************

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
                $parametros = $parametros."&tipo=$valor";
            }
        }
        $consulta = substr($consulta,0,strlen($consulta)-2);
    }
    
    
    //CODIGO PARA MOSTRAR TODAS LAS PLANTILLAS
    if(isset($_GET["todas"])){
        $consulta = $consulta_todas;
        $parametros = $parametros."&todas";
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
            $parametros = $parametros."&listaPlantillas[]=$value";
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
            $parametros = $parametros."&listaTipos[]=$valor";
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
    
   
    <?php
    
    $resultado2 = $this->Plantilla->mostrar_plantillas($consulta);
    $consulta = $consulta." LIMIT $offset,$limit";
    //Se guarda el resultado de la consulta y el numero de filas devueltas
    $resultado = $this->Plantilla->mostrar_plantillas($consulta);
    $num_rows = $this->Plantilla->numero_filas($resultado2);
    
        
        if($num_rows==0){//si no hay plantillas del tema seleccionado -> mostrar todas
            echo "<br><span class='letra_azul'>NO SE ENCONTRARON PLANTILLAS DEL TEMA SELECCIONADO</span><br><br>";
            
            $resultado = $this->Plantilla->mostrar_plantillas($consulta_todas);
            $num_rows = $this->Plantilla->numero_filas($resultado);
        }
        
    
        ?>
         <!--div en el que se van a colocar las imagenes de la plantilla-->
        <div id="contenedor_plantillas">
            <?php
            include("pestana_ordenar.php");
            include("vista_previa_plantillas.php");
            $totalPag = ceil($num_rows/$limit);
            $links = array();
            $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
            for( $i=1; $i<=$totalPag ; $i++)
             {                
                $url = str_replace("&pag=$i","",$url);
                //$links[] = "<a href=\"?pag=$i$parametros\">$i</a>"; 
                $links[] = "<a href=$url&pag=$i>$i</a>";
             }
         
         echo implode(" - ", $links);
        
            ?>
        </div>
        
