// JavaScript Document

// función para apagar todos los div's de error
function apagar_div(){
  var campo = document.getElementsByTagName("div");
  for(i=0;i<campo.length;i++){
    if( (campo[i].className) == "error_cita" ){
      campo[i].style.display = "none";
    }
  }
}


// función para apagar todos los div's de error login
function apagar_div_login(){
  var campo = document.getElementsByTagName("div");
  for(i=0;i<campo.length;i++){
    if( (campo[i].className) == "error_login" ){
      campo[i].style.display = "none";
    }
  }
}

// función para apagar todos los div's de error login
function apagar_div_presupuesto(){
  var campo = document.getElementsByTagName("div");
  for(i=0;i<campo.length;i++){
    if( (campo[i].className) == "error_presupuesto" ){
      campo[i].style.display = "none";
    }
  }
}


// función para tratar los ERRORES en el formulario.
// en elemento se pasa el id del elemento donde se ha producido el error.
// en error se pasa el id del div que debe aparacer en caso de error.
// en mensaje se pasa la cadena que aparecera como mensaje de error.
function error(elemento,error,mensaje){  
  var campo = document.getElementById(error);
  
  campo.style.display = "block";
  document.getElementById(elemento).focus();
  campo.innerHTML = mensaje; //al div se le añade el mensaje pasado como parámetro.
}


//función para comprobar que un campo no esté vacío.
function campo_vacio(campo){
  var valor = document.getElementById(campo).value; //almacenamos el valor introducido por el usuario  
  
  return((valor == null) || (valor.length == 0) || (/^\s+$/.test(valor)) )
}

//función para comprobar longitud del número de teléfono.
function longitud_telefono(campo){
  var valor = document.getElementById(campo).value; //almacenamos el valor introducido por el usuario
  
  var longitud = valor.length;
  
  return (longitud==9);
    
}

// función para determinar si un campo es un NÚMERO
function no_es_numero(campo){
  var valor = document.getElementById(campo).value;
  
  return (isNaN(valor));
}

//función para comprobar EMAIL.
function comprobar_email(campo){
  var valor = document.getElementById(campo).value;
  
  if( !(/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(valor)) ){
    return false;
  }
    return true;
}


/*------------------------ VALIDAR CONTACTA CON NOSOTROS -------------------------------*/
//función COMPLETA para validar el formulario.
function validar_contacta(){
  var formulario_validar = document.getElementById("formu");
  
  apagar_div(); //apagamos todos los div error para que no se queden en pantalla una vez que volvemos a llamar a la función validar.
  
  if(campo_vacio("nombre_cita")){ //comprobamos Nombre vacío.
    error("nombre_cita","nombre_cita_error","El campo nombre no puede estar vac&iacute;o.");
    return false;
  }
  
  
  if( (campo_vacio("email_cita")) ||  !(comprobar_email("email_cita")) ){ //comprobar el EMAIL.
    error("email_cita","email_cita_error","Error.- Email vac&iacute;o o incorrecto.");
    return false;
  } 
  
   if(campo_vacio("consulta_cita")){ //comprobar CONSULTA.
    error("consulta_cita","consulta_cita_error","El campo mensaje no puede estar vac&iacute;o.");
    return false;
   }
  
  formulario_validar.submit(); //enviar el formulario.
}


/*------------------------ VALIDAR PRESUPUESTO -------------------------------*/
//función COMPLETA para validar el formulario.
function validar_presupuesto(){

  var formulario_validar = document.getElementById("formulario_presupuesto");
  
  apagar_div_presupuesto(); //apagamos todos los div error para que no se queden en pantalla una vez que volvemos a llamar a la función validar.
  
  if(campo_vacio("nombre_empresa")){ //comprobamos Nombre vacío.
    error("nombre_empresa","nombre_empresa_error","El campo nombre no puede estar vac&iacute;o.");
    return false;
  }
  
  if(campo_vacio("persona_contacto")){ //comprobamos Nombre vacío.
    error("persona_contacto","persona_contacto_error","El campo persona de contacto no puede estar vac&iacute;o.");
    return false;
  }
  
   if( (!longitud_telefono("telefono_contacto")) ||  (no_es_numero("telefono_contacto")) ){ //comprobar el Telefono.
    //alert("hola");
    error("telefono_contacto","telefono_contacto_error","Error.- Telefono incorrecto.");
    return false;
  } 
  
  
  if( (campo_vacio("email_contacto")) ||  !(comprobar_email("email_contacto")) ){ //comprobar el EMAIL.
    error("email_contacto","email_contacto_error","Error.- Email vac&iacute;o o incorrecto.");
    return false;
  }
  /*
   if(campo_vacio("consulta_cita")){ //comprobar CONSULTA.
    error("consulta_cita","consulta_cita_error","El campo mensaje no puede estar vac&iacute;o.");
    return false;
   }*/
  
  formulario_validar.submit(); //enviar el formulario.
}

//********************************* FUNCIONES PARA HACER APARECER O APAGAR ELEMENTOS FORMULARIO 
function encender_elemento(elemento){
    var campo = document.getElementById(elemento);
    //campo.style.visibility="visible";
    campo.style.display="block";
}

function apagar_elemento(elemento){
    var campo = document.getElementById(elemento);
    //campo.style.visibility="hidden";
    campo.style.display="none";
}


