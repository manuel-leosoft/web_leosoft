/*$(document).ready(function(){
    $("#generar_pdf").click(function() {
	
        //var nombre = $("#nombre").val();
        var nombre = $("#nombre_empresa").val();
	
        var params = "nombre="+nombre;
                
            $.ajax({ 
                    async: false,
                    type: "POST",
                    url: "php/prueba.php",
                    data: params,
                    success: function(html){
                        $("#mensaje_pdf").html(html);
                        //setTimeout(function(){$("#prueba").html('&nbsp;')},5000);//borramos el mensaje de error en 5s
                    }
            });
        });
});*/