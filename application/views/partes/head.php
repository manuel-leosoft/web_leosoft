<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo $title;?></title>
    
    <!-- enlazar favicon -->
    <link rel="shortcut icon" href="favicon.ico" >
    
    <!-- enlazar CSS -->
    <!-- css ventana emergente-->
    <link href="<?php echo base_url();?>css/jquery-ui.css" type="text/css" rel="stylesheet" />
    <!-- css reset -->
    <link href="<?php echo base_url();?>css/reset.css" type="text/css" rel="stylesheet" />
    <!-- css general -->
    <link href="<?php echo base_url();?>css/estilos.css" type="text/css" rel="stylesheet" />
    
    <!-- enlazar javascript y jquery -->
    <script src="<?php echo base_url();?>jquery/jquery-1.9.1.min.js" type="text/javascript"/></script>
    <script src="<?php echo base_url();?>jquery/jquery-ui.js" type="text/javascript"/></script>
    <script src="<?php echo base_url();?>js/formulario_contacta.js" type="text/javascript"/></script>
    <script src="<?php echo base_url();?>js/ventana_emergente.js" type="text/javascript"/></script>
    <script src="<?php echo base_url();?>js/funciones_ajax.js" type="text/javascript"/></script>
    
    <!-- c�digo para el slider -->
    <script type="text/javascript">
        $(function(){
            $('#slider div:gt(0)').hide();
            setInterval(function(){
              $('#slider div:first-child').fadeOut(0)
                 .next('div').fadeIn(1000)
                 .end().appendTo('#slider');}, 8000);
        });
    </script>
    
    
    <!-- c�digo para el rollover -->
    <script type="text/javascript">
        $(document).ready(function(){
              
                $('#twitter').hover(
                    function() {
                    $('#twitter').attr("src","<?php echo base_url();?>imagenes/twitter_hover.png");
                    },
                    function() {
                    $('#twitter').attr("src","<?php echo base_url();?>imagenes/twitter.png");
                    }
                    );
                    
                    $('#facebook').hover(
                    function() {
                    $('#facebook').attr("src","<?php echo base_url();?>imagenes/facebook_hover.png");
                    },
                    function() {
                    $('#facebook').attr("src","<?php echo base_url();?>imagenes/facebook.png");
                    }
                    );
                    
                     $('#quienes').hover(
                    function() {
                    $('#quienes').attr("src","<?php echo base_url();?>imagenes/quienessomosazul.png");
                    },
                    function() {
                    $('#quienes').attr("src","<?php echo base_url();?>imagenes/quienessomosgris.png");
                    }
                    );
        });
    </script>
    
    
    <!-- ////////////////////////////////////////////// zona de pruebas ////////////////////////////////////////////////////////-->

    
  </head>