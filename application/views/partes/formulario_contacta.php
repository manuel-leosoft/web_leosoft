  <form id="formu" method="POST" action="partes/enviar_formulario_contacta.php">
  <table id="tabla_formu_cita">
  
    
    <tr>
      <td>
        Nombre: <br />
        <input class="elem_formu" type="text" id="nombre_cita" name="nombre_cita" /></td></tr>
        <tr height="20px;"><td>
        <div class="error_cita" id="nombre_cita_error"> 
         </div> 
      </td>
    </tr>
    <tr>
      <td>
        Email: <br />
        <input class="elem_formu" type="text" id="email_cita" name="email_cita" /> </td></tr>
        <tr height="20px;"><td>
        <div class="error_cita" id="email_cita_error"> 
        </div> 
      </td>
    </tr>
    
    <tr>
      <td>
        Mensaje: <br />
         <textarea class="elem_formu" cols=20 rows=4 name="consulta_cita" id="consulta_cita"></textarea></td></tr>
        <tr height="20px;"><td>
         <div class="error_cita" id="consulta_cita_error"> 
        </div> 
      </td>
    </tr>
    
    
    
    <tr>
      <td>
        <input class="boton" value="Enviar" type="button" name="enviar" id="enviar" onclick="validar_contacta();"/>
        <input style="float:left;" class="boton" value="Borrar" type="reset" name="reset" id="reset" />
        <!-- Nos lleva a una función js que valida el formulario
        hace y esta es la que se encarga de hacer el submit a la pagina .php para 
        que envíe el correo -->
      </td>
    </tr>
    
    <tr height="20px;"><td>
         <div class="enviar_ok" id="consulta_cita_error"> 
            <?php 
                if(isset($_GET["ok"])&&($_GET["ok"]==1)){
                    echo "Gracias por su mensaje. Le contestaremos lo antes posible.";
                }
                else if(isset($_GET["ok"])&&($_GET["ok"]!=1)){
                    echo "Error al enviar el mensaje. Int&eacute;ntelo de nuevo.";
                }
            ?>
        </div> 
      </td>
    </tr>
    
  </table>
  </form>