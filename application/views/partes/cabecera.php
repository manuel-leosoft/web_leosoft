<div id="cabecera">
<a href="inicio"><img width=290px src="<?php echo base_url();?>imagenes/leosoft_logo.png" title="logo Leosoft" /></a>


	
<!--<object wmode="transparent" id="prueba" type="application/x-shockwave-flash" data="leosoft.swf" width="290px" height="50px;">
    <param name="movie" value="archivoflash.swf" />
    <param name="quality" value="high" />
    <img src="imagenes/leosoft_logo.png" width="290px"alt="Logo Leosoft" />
</object>-->

<!--<div style="float:left;margin-left:20px;margin-top:-25px;"><embed src="leosoft.swf" wmode="transparent"></embed></div>-->
    
    <div id="contenedor_menu">
        <div id="menu">
            <ul>
            	<li><a href="<?php echo  $this->session->userdata('idioma');?>home/quienes_somos" title="Quienes somos"><?=lang('about.us')?><!--Qui&eacute;nes somos--></a></li>
                <li><a href="<?php echo  $this->session->userdata('idioma');?>home/contacto" title="Contactar"><?=lang('about.contact')?><!--Contacto!--></a></li>
                <!--<li><a href="#" title="Dominios">Dominios</a></li>-->
                <li><a href="<?php echo  $this->session->userdata('idioma');?>home/presupuesto" title="Presupuesto"><?=lang('about.budget')?><!--Presupuesto!--></a></li>
                <?php if(isset($_SESSION["usuario"])&&($_SESSION["permiso"])==2){ ?>
                <li><a href="<?php echo base_url();?>index.php/home/panel_control" title="Panel de control">Panel Control</a></li>
                <?php } ?>
		<li><a href="plantillas" title="Plantilla2"><?=lang('about.template')?><!--Plantilla2!--></a></li>
            </ul>
        </div>
      </div>
    
</div>
