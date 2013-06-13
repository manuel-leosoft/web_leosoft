<div id="cabecera">
<a href="index.php"><img width=290px src="<?php echo base_url();?>imagenes/leosoft_logo.png" title="logo Leosoft" /></a>

	
<!--<object wmode="transparent" id="prueba" type="application/x-shockwave-flash" data="leosoft.swf" width="290px" height="50px;">
    <param name="movie" value="archivoflash.swf" />
    <param name="quality" value="high" />
    <img src="imagenes/leosoft_logo.png" width="290px"alt="Logo Leosoft" />
</object>-->

<!--<div style="float:left;margin-left:20px;margin-top:-25px;"><embed src="leosoft.swf" wmode="transparent"></embed></div>-->
    
    <div id="contenedor_menu">
        <div id="menu">
            <ul>
            	<li><a href="quienes_somos.php" title="Quienes somos">Qui&eacute;nes somos</a></li>
                <li><a href="contacto.php" title="Contactar">Contacto</a></li>
                <!--<li><a href="#" title="Dominios">Dominios</a></li>-->
                <li><a href="presupuesto.php" title="Presupuesto">Presupuesto</a></li>
                <?php if(isset($_SESSION["usuario"])&&($_SESSION["permiso"])==2){ ?>
                <li><a href="panel_control.php" title="Panel de control">Panel Control</a></li>
                <?php } ?>
		<li><a href="plantilla2.php" title="Plantilla2">Plantilla2</a></li>
            </ul>
        </div>
      </div>
    
</div>