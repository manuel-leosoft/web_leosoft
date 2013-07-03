<!--<div id="cabecera">
<a href="<?php echo base_url() ?>index.php/home/inicio"><img width=290px src="<?php echo base_url();?>imagenes/leosoft_logo.png" title="logo Leosoft" /></a>

    
    <div id="contenedor_menu">
        <div id="menu">
            <ul>
            	<li><a href="<?php echo base_url();?>index.php/home/quienes_somos" title="Quienes somos">Qui&eacute;nes somos</a></li>
                <li><a href="<?php echo base_url();?>index.php/home/contacto" title="Contactar">Contacto</a></li>

                <li><a href="<?php echo base_url();?>index.php/home/presupuesto" title="Presupuesto">Presupuesto</a></li>
                <?php if(isset($_SESSION["usuario"])&&($_SESSION["permiso"])==2){ ?>
                <li><a href="<?php echo base_url();?>index.php/home/panel_control" title="Panel de control">Panel Control</a></li>
                <?php } ?>
		<li><a href="<?php echo base_url();?>index.php/plantillas/mostrar" title="Plantillas">Plantillas</a></li>
            </ul>
        </div>
      </div>
      
      
    
</div>
-->

<!-- **********************CLASS HDR PRINCIPAL*****************************-->
                            <div class="hdr-principal">
                                
                                
                                <!-- **********************CLASS GRID CF*****************************-->
                                <div class="grid cf">
                                    
                                    <div class="h-left">
                                        <p class="hdr-brand h-inb">
                                            <a id="tu_menu_logo_link" href="<?php echo base_url() ?>index.php/home/inicio">Leotemplates</a>
                                        </p>
                                        <ul class="sections h-inb inb-list">
                                            <li><a id="menu_link_brand" href="<?php echo base_url();?>index.php/plantillas/mostrar?tipo=web" class=""><strong>Plantillas web</strong></a></li>
                                            <li><a id="submenu_link_tariffs" href="<?php echo base_url();?>index.php/plantillas/mostrar?tipo=cms" class=""><strong>Plantillas Cms</strong></a></li>
                                            <li><a id="menu_link_store" href="<?php echo base_url();?>index.php/plantillas/mostrar?tipo=tienda" class=""><strong>Tiendas online</strong></a></li>
                                            <!--<li><a id="menu_link_retailers" href="index.html" class=""><strong>Plantillas Joomla</strong></a></li>
                                            <li><a id="menu_link_support" href="index.html" class=""><strong>Plantillas PrestaShop</strong></a></li>-->
                                        </ul>
                                    </div>
                                    
                                    <div class="h-right">
                                        <a id="login" href="index.html" class="h-stext h-link dpd-trigger"><strong>Entrar</strong></a>
                                        <div class="dpd-content hide">
                                            <div id="login_iframe_container"></div>
                                        </div>
                                    </div>
                                
                                </div>
                                 <!-- **********************FIN CLASS GRID CF*****************************-->
                                
                               
                                
                            </div>
<!-- **********************FIN CLASS HDR PRINCIPAL*****************************--> 
                            
                            <div id="fondo_cabecera">
                            </div>