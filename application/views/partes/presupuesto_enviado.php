<?php
    session_start();
    include("../partes/head.php");
?>
<style>
body
{
    background-color:#d1d1d1;
}
#mensaje_enviado{
    width:500px;
    height:500px;
    background-color:white;
    margin:0 auto;
    border:2px solid #8A8D91;
}

#boton_cerrar{
    float:right;
    color:#8A8D91;
}
#barra_cerrar{
    background-color:#8A8D91;
    height:20px;
    width:100%;
}

#prueba{
    color:#065c9f;
    text-align:center;
}

#mensaje_enviado p{
    color:#f0801b;
    font-weight:bold;
    margin:25px;
    text-align:center;
}

.boton{
    width: 100px;
    background-color:#f0801b;
    border:1px solid #8A8D91;
    height:25px; 
   color:#065c9f;
    font-weight:bold;
}

.boton:hover{
    width: 100px;
    background-color:#F5A05C;
    border:1px solid #8A8D91;
}

#centrar{
    width:100px;
    margin:0 auto;
}

.naranja{
    background-color:orange;
    margin-top:-10px;
}



</style>
<!-- ************************ FIN HEAD ****************************-->
<body>
  
    <div id="mensaje_enviado">
        <div id="barra_cerrar"><input id="boton_cerrar" type="button" onclick="window.close();" value="X"></input></div>
        <div class="naranja">
        <h3 id="prueba">GRACIAS POR CONTACTAR CON NOSOTROS</h3>
        </div>
        <p>Su presupuesto ha sido enviado al correo que indic&oacute; para el contacto.</p>
        <p> Si el mensaje no le llega revise su bandeja de correo no deseado.</p>
        <p> Puede ponerse en contacto con nosotros a trav&eacute;s del email o desde nuestro chat.</p>
        <div id="centrar"><input class="boton" type="button" value="ACEPTAR" onclick="window.close();"></input></div>
    </div>  
     

  </body>
</html>