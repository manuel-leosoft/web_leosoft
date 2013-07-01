<?php
    session_start();
    $data['title']="Demo Plantilla";
    $this->load->view('partes/head.php');
    $ruta = $_GET["plantilla"];
    $id = $_GET["id"];
    $_SESSION["plantilla"]=$ruta;
?>
<!-- ************************ FIN HEAD ****************************-->
<body>
         <script>
            //C—digo para determinar si la p‡gina se ha recargado => para no actualizar el nœmero de visitas en la base de datos
               var contador=isNaN(parseInt(window.name))?1:parseInt(window.name);
               var i;
               if(contador<2)
               {
                    contador++;
                    window.name=contador;
                    i=0;
               }
               else
               {
                   i=1;
               }
               var url = "<?php echo $this->session->userdata('url');?>";
               alert(url);
               var prueba="<?php echo base_url().$ruta; ?>";
               alert(prueba);
               demo("<?php echo base_url().$ruta; ?>",url,"<?php echo $id; ?>",i);
                
         </script>
         
         
  </body>
</html>