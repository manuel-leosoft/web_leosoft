  $(function() {
    var name = $( "#name" ),
      email = $( "#email" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( email ).add( password ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "La longitud de " + n + " debe ser entre " +
          min + " y " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 280,
      width: 350,
      modal: true,
      buttons: {
        "Enviar": function() {
          var bValid = true;
          allFields.removeClass( "ui-state-error" );
 
          bValid = bValid && checkLength( name, "Nombre", 3, 16 );
          bValid = bValid && checkLength( email, "Email", 6, 80 );
          bValid = bValid && checkLength( password, "Password", 5, 16 );
 
          bValid = bValid && checkRegexp( name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
          // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
          bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
          bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
        
          if ( bValid ) {
           $( "#users tbody" ).append( "<tr>" +
              "<td>" + name.val() + "</td>" +
              "<td>" + email.val() + "</td>" +
              "<td>" + password.val() + "</td>" +
            "</tr>" );
            $( this ).dialog( "close" );
            $("#formulario").submit();
          }
        },
        "Cancelar": function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
 
    $( "#create-user" )
      .button()
      .click(function() {
        $( "#dialog-form" ).dialog( "open" );
      });
  });
  
 /*--------------------------- VENTANA EMERGENTE -------------------------*/ 
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      height: 300,
      width: 280,
      modal:true,
      show: {
        effect: "explode",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#create-user" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
  
  $(function() {
    $( "#ventana_generar_pdf" ).dialog({
      autoOpen: false,
      height: 300,
      width: 280,
      modal:true,
      show: {
        effect: "explode",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#generar_pdf" ).click(function() {
      $( "#ventana_generar_pdf" ).dialog( "open" );
    });
  });
 

/*------------------------ VALIDAR LOGIN -------------------------------*/
//función COMPLETA para validar el formulario.
function validar_login(){
  var formulario_validar = document.getElementById("formulario_login");
  
  apagar_div_login(); //apagamos todos los div error para que no se queden en pantalla una vez que volvemos a llamar a la función validar.
  
  if(campo_vacio("nombre_login")){ //comprobamos Nombre vacío.
    error("nombre_login","nombre_login_error","El campo usuario no puede estar vac&iacute;o.");
    return false;
  }

  
   if(campo_vacio("pass_login")){ //comprobar CONSULTA.
    error("pass_login","pass_login_error","El campo password no puede estar vac&iacute;o.");
    return false;
   }
   
   var datos="nombre="+
  
  formulario_validar.submit(); //enviar el formulario.
}


function cerrar(){
    $( "#dialog" ).dialog("close");
}
