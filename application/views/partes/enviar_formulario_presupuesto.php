<?php


//***********************tratar datos formulario*********************************

//precios por apartados
$precio_idiomas=40;
$precio_seccion=50;//precio gestion de usuarios
$precio_usuarios=25;//precio gestion de usuarios
$precio_noticias=30;//precio gestor de noticias
$precio_novedades=30;//precio aviso de novedades
$precio_contacto=30;//precio formulario contacto
$precio_mapa=22;//precio mapa localizacion
$precio_galeria=40;//precio galeria de imagenes
$precio_banners=40;//precio gestion de banners
$precio_smart_phone=100;//precio adaptar web a movil
$precio_mantenimiento=100;//precio mantenimiento periodico
$precio_imagen=50;//precio imagen corporativa
$precio_hosting=8.90;//precio del hosting por mes

//variable para hacer la suma del presupuesto
$presupuesto=0;


//recoger los datos del formulario
$empresa = $_POST["nombre_empresa"];
$email = $_POST["email_contacto"];
$consulta = $_POST["consulta_web"];
$persona = $_POST["persona_contacto"];
$telefono = $_POST["telefono_contacto"];
  
$idiomas = $_POST["idiomas"];
if(isset($_POST["lista_idiomas"])){
  $lista_idiomas = $_POST["lista_idiomas"];
  $numero_idiomas = count($lista_idiomas);
}

$secciones = $_POST["secciones"];
$numero_secciones = $_POST["numero_secciones"];

$usuarios = $_POST["usuarios"];
$noticias = $_POST["noticias"];
$novedades = $_POST["novedades"];
$contacto = $_POST["contacto"];
$mapa = $_POST["mapa"];
  
$galeria = $_POST["galeria"];
$banners = $_POST["banners"];
$smart_phone = $_POST["telefono"];
$mantenimiento = $_POST["mantenimiento"];
$imagen = $_POST["imagen"];
$hosting = $_POST["hosting"];
  

if(($idiomas=="idiomas_SI")&&($numero_idiomas>1)){
    $presupuesto+=($precio_idiomas*$numero_secciones*($numero_idiomas-1));
}
    
if($secciones=="secciones_SI"){
    $presupuesto+=($precio_seccion*$numero_secciones);
}
if($usuarios=="usuarios_SI"){
    $presupuesto+=$precio_usuarios;
}
if($noticias=="noticias_SI"){
    $presupuesto+=$precio_noticias;
}
if($novedades=="novedades_SI"){
    $presupuesto+=$precio_novedades;
}
if($contacto=="contacto_SI"){
    $presupuesto+=$precio_contacto;
}
if($mapa=="mapa_SI"){
    $presupuesto+=$precio_mapa;
}
if($galeria=="galeria_SI"){
    $presupuesto+=$precio_galeria;
}
if($banners=="banners_SI"){
    $presupuesto+=$precio_banners;
}
if($smart_phone=="telefono_SI"){
    $presupuesto+=$precio_smart_phone;
}
if($imagen=="imagen_SI"){
    $presupuesto+=$precio_imagen;
}

//*********************** fin tratar datos formulario*********************************
  
?>
