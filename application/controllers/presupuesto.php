<?php
class Presupuesto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
   function index()
	{


	    $this->load->helper('url');  
		$data['title'] = 'Presupuesto';
		$data['main_content'] = 'presupuesto';
		$this->load->view('index.php',$data);
	}
	
	function enviar()
    {
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
$data['precio_hosting']=$precio_hosting;
//variable para hacer la suma del presupuesto
$presupuesto=0;


//recoger los datos del formulario
$data['empresa'] = $_POST["nombre_empresa"];
$data['email'] = $_POST["email_contacto"];
$data['consulta'] = $_POST["consulta_web"];
$data['persona'] = $_POST["persona_contacto"];
$data['telefono'] = $_POST["telefono_contacto"];
  
$idiomas = $_POST["idiomas"];
$data['idiomas'] = $idiomas;
if(isset($_POST["lista_idiomas"])){
  $lista_idiomas = $_POST["lista_idiomas"];
  $data['lista_idiomas'] = $lista_idiomas;
  $numero_idiomas = count($lista_idiomas);
  $data['numero_idiomas'] = $numero_idiomas;
}

$secciones = $_POST["secciones"];
$data['secciones'] = $secciones;
$numero_secciones = $_POST["numero_secciones"];
$data['numero_secciones'] = $numero_secciones;
$usuarios = $_POST["usuarios"];
$data['usuarios'] = $usuarios;
$noticias = $_POST["noticias"];
$data['noticias'] = $noticias;
$novedades = $_POST["novedades"];
$data['novedades'] = $novedades;
$contacto = $_POST["contacto"];
$data['contacto'] = $contacto;
$mapa = $_POST["mapa"];
$data['mapa'] = $mapa;
  
$galeria = $_POST["galeria"];
$data['galeria'] = $galeria;
$banners = $_POST["banners"];
$data['banners'] = $banners;
$smart_phone = $_POST["telefono"];
$data['smart_phone'] = $smart_phone;
$mantenimiento = $_POST["mantenimiento"];
$data['mantenimiento'] = $mantenimiento;
$imagen = $_POST["imagen"];
$data['imagen'] = $imagen;
$hosting = $_POST["hosting"];
$data['hosting'] = $hosting;
  

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
   $data['presupuesto'] = $presupuesto;
  		$this->load->helper('url');  
		$data['title'] = 'Su presupuesto';
		$data['main_content'] = 'su_presupuesto';
		$this->load->view('index.php',$data);	
    
    
    }


}
?>