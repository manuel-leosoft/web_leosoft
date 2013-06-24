<?php
/*
    $cadena = "";
    
    foreach($_POST as $nombre_campo => $valor){ 
       $cadena = $cadena."tema='$valor'||"; 
    } 
    
    $cadena = substr($cadena,0,$cadena.length-2);
    //echo $cadena;
   
    $consulta = "SELECT * FROM plantilla WHERE ".$cadena;
    //echo $consulta;
    
    $resultado = $this->Plantilla->numero_plantillas_tipo();
    
    if($resultado = $conexion->query($consulta)){
        if($resultado->num_rows==0){
            echo "No hay plantillas para los temas seleccionados. Pulse siguiente para ver todas nuestras plantillas.";
        }
        else{
            echo "Hay un total de <span class='letra_azul' style='font-size:1.2em;'>".$resultado->num_rows." </span>plantillas para los temas seleccionados.";
        }
    }*/
    
   echo $this->Plantilla->numero_plantillas_tipo();
?>