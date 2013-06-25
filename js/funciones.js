
/*
* Funci—n para comprobar que se selecciona al menos un tema de plantillas. 
* Como par‡metro se le pasa el id del formulario de las plantillas.
*/
function enviar_formulario_plantillas(elemento){
    var formulario = document.getElementById(elemento);
    var checks = $("input:checkbox");
    var i=0;
    var salir=false;
    //si encuentra un checkbox marcado -> sale del bucle y env’a el formulario
    while((i<checks.length)&&(!salir)){
        if(checks[i].checked){
            salir=true;
        }
        i++;
    }
    if(salir){
        formulario.submit();
    }
    else{
        $("#error_plantilla").fadeIn('500').css("display","block");
        setTimeout(function(){$("#error_plantilla").css("display","none")},4000);//borramos el mensaje en 5s
    }
}




/*
* Funciones para hacer el efecto de vista previa de las plantillas.
*/
var w=1
var h=1

if (document.getElementById || document.all)
document.write('<div id="trailimageid" style="position:absolute;visibility:hidden;left:0px;top:-1000px;width:1px;height:1px;border:1px solid #888888;background:#DDDDDD;"><img id="ttimg" src="img/s.gif" /></div>')

function gettrailobj()
{
	if (document.getElementById) return document.getElementById("trailimageid").style
	else if (document.all) return document.all.trailimagid.style
}

function truebody()
{
	return (!window.opera && document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function hidetrail()
{
	document.onmousemove=""
	document.getElementById('ttimg').src='/img/s.gif'
	gettrailobj().visibility="hidden"
	gettrailobj().left=-1000
	gettrailobj().top=0
}


function showtrail(width,height,file)
{
	if(navigator.userAgent.toLowerCase().indexOf('opera') == -1)
	{
		w=width
		h=height
		
		// followmouse()
	
		document.getElementById('ttimg').src=file
		document.onmousemove=followmouse
		gettrailobj().visibility="visible"
                gettrailobj().zIndex=10;//a–adir este z index para que la previsualizaci—n de la plantilla quede por encima de todo
		gettrailobj().width=w+"px"
		gettrailobj().height=h+"px"


	}
}


function followmouse(e)
{

	if(navigator.userAgent.toLowerCase().indexOf('opera') == -1)
	{

		var xcoord=20
		var ycoord=20

		if (typeof e != "undefined")
		{
			xcoord+=e.pageX
			ycoord+=e.pageY
		}
		else if (typeof window.event !="undefined")
		{
			xcoord+=truebody().scrollLeft+event.clientX
			ycoord+=truebody().scrollTop+event.clientY
		}

		var docwidth=document.all? truebody().scrollLeft+truebody().clientWidth : pageXOffset+window.innerWidth-15
		var docheight=document.all? Math.max(truebody().scrollHeight, truebody().clientHeight) : Math.max(document.body.offsetHeight, window.innerHeight)

		if (xcoord+w+3>docwidth)
		xcoord=xcoord-w-(20*2)

		if (ycoord-truebody().scrollTop+h>truebody().clientHeight)
		ycoord=ycoord-h-20;

		gettrailobj().left=xcoord+"px"
		gettrailobj().top=ycoord+"px"
                //gettrailobj().top="0px"

	}

}

//**********************************************************************************************************************************************


//**********************************************************************************************************************************************
//funcion para ordenar la lista de plantillas por tema o por tipo
 function ordenar(tipo){
            var url = location.href;//recoge la url actual
            var pos = url.lastIndexOf('&');
            
            if(pos>0){//si hay un & en la url
                var variable = url.substring(pos+1,pos+8);
                if(variable=='ordenar'){//comprueba que la ultima variable es ordenar
                    url = url.substring(0,pos);//si lo es, la borra de la cadena
                }
            }
            if(tipo=='tipo'){//para ordenar por tipo a–ade una variable ordenar
                url = url + "&ordenar=tipo";
                window.location.href = url;
            }
            else{//para ordenar por tema se hace una redireccion a la pagina sin la variable ordenar
                window.location.href = url;
            }
        }


//**********************************************************************************************************************************************


//**********************************************************************************************************************************************
//Funci—n para a–adir o eliminar art’culos al carrito de compra
//Como par‡metros recibe el id de la plantilla y la acci—n a realizar
function carrito(accion,id){
    if(accion=="remove"){
        var params="id="+id+"&action=remove";
    }
    else if(accion=="add"){
        var params="id="+id+"&action=add";
    }
    $.ajax({ 
        async: false,
        type: "GET",
        url: "carro.php",
        data: params,
        success: function(){
            //window.location.href = response.redirect;
           location.reload();
        }
    });
}



//Funci—n para mostrar el detalle de pedido de un pedido (art’culos del pedido)
//Como par‡metro recibe el id del pedido.
function detalle_pedido(id){
    //apagar vista previa
    var a = document.getElementById("imagen_peque–a");
    a.style.display="none";
    
    //apagamos todos las filas
    var tr = document.getElementsByClassName("tr_apagado");
    for(var i = 0;i<tr.length;i++){
        if(i%2==0)
            tr[i].style.backgroundColor="transparent";
        else
            tr[i].style.backgroundColor="orange";
    }
    
    //encendemos la fila seleccionada
    var p = document.getElementById(id);
    p.style.backgroundColor="#065c9f";
    
    var param = "id="+id;
    
    $.ajax({ 
        async: false,
        type: "GET",
        url: "php/pedidos_usuario.php",
        data: param,
        success: function(html){
           $("#detalle_pedido").html(html).css("display","block");
        }
    });
}



//funcion para mostrar que plantilla ha comprado => panel de control
function mostrar_imagen(img,ref){
    //apagamos todos las filas
    var apagar = document.getElementsByClassName("seleccion_apagado");
    for(var i = 0;i<apagar.length;i++){
       apagar[i].style.backgroundColor="transparent";
    }
    
    var lugar = document.getElementById("imagen_peque–a");
    lugar.style.backgroundImage="url("+img+")";
    lugar.style.display="block";
    
    var seleccionado = document.getElementById(ref);
    seleccionado.style.backgroundColor = "#065c9f";
}


//funci—n para abrir el demo de las plantillas
//se pasa la ruta de la plantilla y en direccion = base_url();
//se pasa como argumento el id de la plantilla
// en tipo se obtiene un numero que determina si es recarga de pagina o entrada nueva => si es recarga no se actualiza la base de datos
function demo(ruta,direccion,id,tipo){
    
    var param = "id="+id;
    
    if(tipo==0)//si es 0 quiere decir que no es recarga de pagina y por lo tanto hay que actualizar la base de datos
    { 
        $.ajax({ 
            async: false,
            type: "GET",
            url: direccion + "index.php/plantillas/contador_visitas_plantilla",
            data: param,
            success: function(html){
                $('#prueba').html(html);
            }
        });
    }
    
    var frame = document.createElement("iframe");
                
    frame.id = "demo_plantillas";
    frame.src = ruta;
    frame.width="100%";
    frame.height="900px";
    document.body.appendChild(frame);
                
}







