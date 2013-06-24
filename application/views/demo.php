<?php
    session_start();
    include("partes/head.php");
    $ruta = $_GET["plantilla"];
    $_SESSION["plantilla"]=$ruta;
?>
<!-- ************************ FIN HEAD ****************************-->
<body>
         <script>
                demo("<?php echo base_url().$ruta; ?>");
         </script>
         
  </body>
</html>