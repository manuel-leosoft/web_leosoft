<?php 
    
?>
<div id="redes_sociales">
    <a target="_blank" href="http://twitter.com/Leosoftweb"><img id="twitter" src="<?php echo base_url();?>imagenes/twitter.png"/></a>
    <a target="_blank" href="http://www.facebook.com/pages/Leosoft/542491845793457"><img id="facebook" src="<?php echo base_url();?>imagenes/facebook.png"/></a>
    <a href="quienes_somos.php"><img id="quienes" src="<?php echo base_url();?>imagenes/quienessomosgris.png"/></a>
    <?php    
           $n=strlen(base_url())-7;
                         
           $pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                       
          
     ?>
    <a href="<?php echo  base_url().'index.php/es/';?>idiomas/espanol?c=<? echo substr($pageURL,$n+13);?>"><img src="<?php echo base_url();?>imagenes/iconos_banderas/espana.png">
    <a href="<?php echo  base_url().'index.php/fr/';?>idiomas/frances?a=<?php echo substr($pageURL,$n+13);?>"><img src="<?php echo base_url();?>imagenes/iconos_banderas/francia.png"></a><?php ?>
    <a href="<?php echo  base_url().'index.php/en/';?>idiomas/ingles?b=<?php echo substr($pageURL,$n+13);?>"><img src="<?php echo base_url();?>imagenes/iconos_banderas/ingles.png"></a>
    <div id="acceso_usuarios">
    <?php if(!isset($_SESSION["usuario"])||($_SESSION["permiso"]!=2)){ ?>
        <button class="zona_privada" id="create-user">Zona privada</button>
    <?php }else { 
    ?>
        <a class="salir" href="php/logout.php">Salir</a>
        <span class="usuario"> <span class="letra_azul" style="text-transform:none;">Bienvenido</span> <?php echo $_SESSION["usuario"];?></span>
    <?php
    } 
    ?>
    </div>
</div>

<div id="dialog" title="Login de usuario">
  <p class="validateTips">*Todos los campos son obligatorios.</p>
 
  <form id="formulario_login" method="POST" action="php/login.php">
  <fieldset>
  <table>
      <tr>
        
        <td>Usuario:<br><input onkeypress="if (event.keyCode == 13) validar_login();" type="text" name="nombre_login" id="nombre_login" class="text ui-widget-content ui-corner-all"/></td>
      </tr>  
      <tr height="20px;"><td>
        <div class="error_login" id="nombre_login_error"> 
         </div> 
      </td>
    </tr>
      <tr>
       
        <td>Password:<br><input onkeypress="if (event.keyCode == 13) validar_login();" type="password" name="pass_login" id="pass_login" value="" class="text ui-widget-content ui-corner-all" /></td>
      </tr>
      <tr height="20px;"><td>
        <div class="error_login" id="pass_login_error"> 
         </div> 
      </td>
    </tr>
    <tr>
        <td><input type="button" value="Entrar" onclick="validar_login();" class="boton_login"/><input class="boton_login" style="float:right;margin-right:20px;" type="button" value="Cancelar" onclick="cerrar()"/></td>
    </tr>
  </table>
  </fieldset>
  </form>
</div>



<div style="clear:both;"></div>
