  <form id="formulario_presupuesto" method="POST" action="su_presupuesto.php"><!-- cambiar el action -->
  
  <div class="fondo_presupuesto">
  
  <!-- -----------PANEL TEXTO -------------------------------------- -->
  <div style="float:left;">
  
  <table>
  
    
    <tr>
      <td>
        Nombre de la empresa: <br />
        <input class="elem_formu" type="text" id="nombre_empresa" name="nombre_empresa" /></td></tr>
        <tr height="20px;"><td>
        <div class="error_presupuesto" id="nombre_empresa_error"> 
         </div> 
      </td>
    </tr>
    
    <tr>
      <td>
        Persona de contacto: <br />
        <input class="elem_formu" type="text" id="persona_contacto" name="persona_contacto" /> </td></tr>
        <tr height="20px;"><td>
        <div class="error_presupuesto" id="persona_contacto_error"> 
        </div> 
      </td>
    </tr>

    <tr>
      <td>
        Tel&eacute;fono de contacto: <br />
        <input maxlength="9" class="elem_formu" type="text" id="telefono_contacto" name="telefono_contacto" /> </td></tr>
        <tr height="20px;"><td>
        <div class="error_presupuesto" id="telefono_contacto_error"> 
        </div> 
      </td>
    </tr>
    
    <tr>
      <td>
        Email de contacto: <br />
        <input class="elem_formu" type="text" id="email_contacto" name="email_contacto" /> </td></tr>
        <tr height="20px;"><td>
        <div class="error_presupuesto" id="email_contacto_error"> 
        </div> 
      </td>
    </tr>
    <tr>
      <td>
        &#191;De qu&eacute; trata su web?: <br />
         <textarea class="elem_formu" cols=20 rows=4 name="consulta_web" id="consulta_web"></textarea></td></tr>
        <tr height="20px;"><td>
         <div class="error_presupuesto" id="consulta_web_error"> 
        </div> 
      </td>
    </tr>
    </table>
    
    </div>
    
    <!-- -----------PANEL BASICO -------------------------------------- -->
    <div class="panel_presupuesto">
    <table>
    <tr>
      <th colspan="3" class="letra_azul">
        Funciones b&aacute;sicas:
      </th>
    </tr>
    
    <tr>
        <td>
        <!--N&uacute;mero de idiomas para su web:-->
        &#191;Web en diferentes idiomas?
        </td>
        
        <!--<input type="radio" name="idiomas" value="idiomas_SI" onclick="encender_elemento('numero_idiomas');" >SI
        <input type="radio" name="idiomas" value="idiomas_NO" onclick="apagar_elemento('numero_idiomas');">No-->
        <td> 
        <input type="radio" id="idiomasSI" name="idiomas" value="idiomas_SI" onclick="encender_elemento('numero_idiomas');"></input>
        <label for="idiomasSI"><span>Si</span></label>
        </td>
        <td> 
        <input type="radio" id="idiomasNO" name="idiomas" value="idiomas_NO" onclick="apagar_elemento('numero_idiomas');"></input>
        <label for="idiomasNO"><span>No</span></label>
        </td>
      </tr>
      <tr width="100%" class="apagado" id="numero_idiomas">
      <td>   
            <input checked="checked" type="checkbox" name="lista_idiomas[]" value="spanol"> Espa&ntilde;ol
            <input type="checkbox" name="lista_idiomas[]" value="ingles"> Ingl&eacute;s
            <input type="checkbox" name="lista_idiomas[]" value="frances"> Franc&eacute;s
      </td>
      </tr>
    
    <tr>
        <td>
        Secciones:
        </td> 
        <!--<input type="radio" name="secciones" value="secciones_SI" onclick="encender_elemento('numero_secciones');" >SI
        <input type="radio" name="secciones" value="secciones_NO" onclick="apagar_elemento('numero_secciones');">No-->
        <!--<input class="apagado" type="text" name="numero_secciones" value="" id="numero_secciones">-->
        
        <td>
        <input type="radio" id="seccionesSI" name="secciones" value="secciones_SI" onclick="encender_elemento('fila_secciones');"></input>
        <label for="seccionesSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="seccionesNO" name="secciones" value="secciones_NO" onclick="apagar_elemento('fila_secciones');"></input>
        <label for="seccionesNO"><span>No</span></label>
        </td>
      </tr>
      <tr class="apagado" id="fila_secciones" ><td>  
        <select name="numero_secciones" id="numero_secciones" >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
        </select>
        </td>
    </tr>
    
    <tr>
        <td>
        Gestor de usuarios (login/pass)
        </td>
        <!--<input type="radio" name="usuarios" value="usuarios_SI" >SI
        <input type="radio" name="usuarios" value="usuarios_NO">No-->
        <td>
        <input type="radio" id="usuariosSI" name="usuarios" value="usuarios_SI"></input>
        <label for="usuariosSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="usuariosNO" name="usuarios" value="usuarios_NO"></input>
        <label for="usuariosNO"><span>No</span></label>
        </td>
    </tr>
   
     <tr>
        <td>
        Gestor de noticias:
        </td>
        <!--<input type="radio" name="noticias" value="noticias_SI" >SI
        <input type="radio" name="noticias" value="noticias_NO">No-->
        <td>
        <input type="radio" id="noticiasSI" name="noticias" value="noticias_SI"></input>
        <label for="noticiasSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="noticiasNO" name="noticias" value="noticias_NO"></input>
        <label for="noticiasNO"><span>No</span></label>
        </td>
    </tr>
    
    <tr>
        <td>
        Aviso de novedades a usuarios:
        </td>
        <!--<input type="radio" name="novedades" value="novedades_SI" >SI
        <input type="radio" name="novedades" value="novedades_NO">No-->
        <td>
        <input type="radio" id="novedadesSI" name="novedades" value="novedades_SI"></input>
        <label for="novedadesSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="novedadesNO" name="novedades" value="novedades_NO"></input>
        <label for="novedadesNO"><span>No</span></label>
        </td>
    </tr>
    
    <tr>
        <td>
        Formulario de contacto:
        </td>
        <!--<input type="radio" name="contacto" value="contacto_SI" >SI
        <input type="radio" name="contacto" value="contacto_NO">No-->
        <td>
        <input type="radio" id="contactoSI" name="contacto" value="contacto_SI"></input>
        <label for="contactoSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="contactoNO" name="contacto" value="contacto_NO"></input>
        <label for="contactoNO"><span>No</span></label>
        </td>
    </tr>   
    
    <tr>
        <td>
         Mapa de localizaci&oacute;n: 
         </td>
        <!--<input type="radio" name="mapa" value="mapa_SI" >SI
        <input type="radio" name="mapa" value="mapa_NO">No-->
        <td>
        <input type="radio" id="mapaSI" name="mapa" value="mapa_SI"></input>
        <label for="mapaSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="mapaNO" name="mapa" value="mapa_NO"></input>
        <label for="mapaNO"><span>No</span></label>
        </td>
    </tr>
    </table>
    </div>
    
    <!-- -----------PANEL ADICIONALES -------------------------------------- -->
    
   <div class="panel_presupuesto">
    <table>
    <tr>
        <th colspan="3" class="letra_azul">
        Funciones adicionales:
        </th>
    </tr>   
    <tr>
        <td>
        Galer&iacute;a de imagenes/videos:
        </td>
        <!--<input type="radio" name="galeria" value="galeria_SI">SI
        <input type="radio" name="galeria" value="galeria_NO">No-->
        <td>
        <input type="radio" id="galeriaSI" name="galeria" value="galeria_SI"></input>
        <label for="galeriaSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="galeriaNO" name="galeria" value="galeria_NO"></input>
        <label for="galeriaNO"><span>No</span></label>
        </td>
    </tr>
      
    <tr>
        <td>
        Gesti&oacute;n de banners(pancartas):
        </td>
        <!--<input type="radio" name="banners" value="banners_SI" >SI
        <input type="radio" name="banners" value="banners_NO">No-->
        <td>
        <input type="radio" id="bannersSI" name="banners" value="banners_SI"></input>
        <label for="bannersSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="bannersNO" name="banners" value="banners_NO"></input>
        <label for="bannersNO"><span>No</span></label>
        </td>
    </tr>   
    
    <tr>
        <td>
        Adaptar web a smart phone:
        </td>
        <!--<input type="radio" name="telefono" value="telefono_SI" >SI
        <input type="radio" name="telefono" value="telefono_NO">No-->
        <td>
        <input type="radio" id="telefonoSI" name="telefono" value="telefono_SI"></input>
        <label for="telefonoSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="telefonoNO" name="telefono" value="telefono_NO"></input>
        <label for="telefonoNO"><span>No</span></label>
        </td>
    </tr>
        
    <tr>
        <td>
        Mantenimiento peri&oacute;dico:
        </td>
        <!--<input type="radio" name="mantenimiento" value="mantenimiento_SI" onclick="encender_elemento('mantenimiento_periodico');">SI
        <input type="radio" name="mantenimiento" value="mantenimiento_NO" onclick="apagar_elemento('mantenimiento_periodico');">No-->
        <!--<input class="apagado" type="text" name="mantenimiento_periodico" value="" id="mantenimiento_periodico">-->
        
        <td>
        <input type="radio" id="mantenimientoSI" name="mantenimiento" value="mantenimiento_SI" onclick="encender_elemento('lista_mantenimiento');"></input>
        <label for="mantenimientoSI"><span>Si</span></label>
        <td>
        <input type="radio" id="mantenimientoNO" name="mantenimiento" value="mantenimiento_NO" onclick="apagar_elemento('lista_mantenimiento');"></input>
        <label for="mantenimientoNO"><span>No</span></label>
        </td>
    </tr>
    <tr class="apagado" id="lista_mantenimiento"><td>
        <select  name="mantenimiento_periodico" id="mantenimiento_periodico">
          <option value="mes">Cada 1 mes</option>
          <option value="3 meses">Cada 3 meses</option>
          <option value="6 meses">Cada 6 meses</option>
          <option value="9 meses">Cada 9 meses</option>
          <option value="12 meses">Cada 12 meses</option>
        </select>
        </td>
    </tr>
    
    <tr>
        <td>
        Imagen corporativa:
        </td>
        <!--<input type="radio" name="imagen" value="imagen_SI" >SI
        <input type="radio" name="imagen" value="imagen_NO">No-->
        <td>
        <input type="radio" id="imagenSI" name="imagen" value="imagen_SI"></input>
        <label for="imagenSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="imagenNO" name="imagen" value="imagen_NO"></input>
        <label for="imagenNO"><span>No</span></label>
        </td>
    </tr>
    
     <tr>
        <th colspan="3" class="letra_azul">
        Funciones complementarias:
        </th>
    </tr>   
    <tr>
        <td>
        &#191;Desea contratar hosting?:
        </td>
        <!--<input type="radio" name="hosting" value="hosting_SI" >SI
        <input type="radio" name="hosting" value="hosting_NO">No-->
        <td>
        <input type="radio" id="hostingSI" name="hosting" value="hosting_SI"></input>
        <label for="hostingSI"><span>Si</span></label>
        </td>
        <td>
        <input type="radio" id="hostingNO" name="hosting" value="hosting_NO"></input>
        <label for="hostingNO"><span>No</span></label>
        </td>
    </tr>  

    
    
    </div>
    </table>
    </div>
    
    <a href="#"><img class="boton_presupuesto" src="imagenes/presupuesto.png" onclick="validar_presupuesto();"></a>
    
  </form>