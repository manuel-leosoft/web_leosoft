<script>

var params="";

    $("#contenido").addClass('pestana_centro');
    
    function numero_plantillas(id){
        var elemento = document.getElementById(id);
        if(elemento.checked==true){
            params = params + elemento.value + "=" + elemento.value+"&";
        }
        else{
            cadena = elemento.value + "=" + elemento.value+"&";
            //alert(cadena);
            params = params.replace(cadena,"");
            //alert(params);
        }
        if(params!=""){
            $.ajax({ 
                    async: false,
                    type: "POST",
                    url: "<?php echo base_url();?>index.php/home/contar_numero_plantillas",
                    data: params,
                    success: function(html){
                        $("#numero_plantillas").fadeIn('500').html(html).css("display","block");
                    }
                });
        }
        else{
           $("#numero_plantillas").css("display","none");
        }
    }
</script>

 <span class="plantilla">Seleccione el tema de su plantilla:</span>
 <div style="display:none">
		<FORM id="formulario_plantillas" style="padding-top:30px;"  ACTION="<?php echo base_url();?>index.php/plantillas/mostrar" METHOD="GET">
            
			<table id="lista_plantillas">

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="adultos" name="listaPlantillas[]" value="adultos" </input>
                                <label for="adultos"><span><span class="letra_azul">A</span>dultos</span></label>
                                <!--<input type=checkbox name=word >Adultos-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="agricultura" name="listaPlantillas[]" value="agricultura" </input>
                                <label for="agricultura"><span><span class="letra_azul">A</span>gricultura</span></label>
                                <!--<input type=checkbox name=joom >Agricultura-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="alojamiento" name="listaPlantillas[]" value="alojamiento" </input>
                                <label for="alojamiento"><span><span class="letra_azul">A</span>lojamiento</span></label>
                                <!--<input type=checkbox name=presta >Alojamiento-->
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="animales" name="listaPlantillas[]" value="animales" </input>
                                <label for="animales"><span><span class="letra_azul">A</span>nimales</label>
                                <!--<input type=checkbox name=mage >Animales y mascotas-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="antiguedades" name="listaPlantillas[]" value="antiguedades" </input>
                                <label for="antiguedades"><span><span class="letra_azul">A</span>ntig&#252;edades</span></label>
                                <!--<input type=checkbox name=moto >Antigüedades-->
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="fotografia" name="listaPlantillas[]" value="fotografia" </input>
                                <label for="fotografia"><span><span class="letra_azul">A</span>rte y fotograf&iacute;a</span></label>
                                <!--<input type=checkbox name=power >Arte y fotografía-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="belleza" name="listaPlantillas[]" value="belleza" </input>
                                <label for="belleza"><span><span class="letra_azul">B</span>elleza</span></label>
                                <!--<input type=checkbox name=php >Belleza-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="bodas" name="listaPlantillas[]" value="bodas" </input>
                                <label for="bodas"><span><span class="letra_azul">B</span>odas</span></label>
                                <!--<input type=checkbox name=face >Bodas-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="cafe" name="listaPlantillas[]" value="cafe" </input>
                                <label for="cafe"><span><span class="letra_azul">C</span>af&eacute;</span></label>
                                <!--<input type=checkbox name=flash >Café-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="casino" name="listaPlantillas[]" value="casino" </input>
                                <label for="casino"><span><span class="letra_azul">C</span>asino online</span></label>
                                <!--<input type=checkbox name=flash >Casino online-->
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="ciencia" name="listaPlantillas[]" value="ciencia" </input>
                                <label for="ciencia"><span><span class="letra_azul">C</span>iencia</span></label>
                                <!--<input type=checkbox name=word >Ciencia-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="clubs_nocturnos" name="listaPlantillas[]" value="clubs_nocturnos" </input>
                                <label for="clubs_nocturnos"><span><span class="letra_azul">C</span>lubs nocturnos</span></label>
                                <!--<input type=checkbox name=joom >Clubs nocturnos-->
                                </td>
                            
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="coches" name="listaPlantillas[]" value="coches" </input>
                                <label for="coches"><span><span class="letra_azul">C</span>oches</span></label>
                                <!--<input type=checkbox name=presta >Coches-->
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="comida" name="listaPlantillas[]" value="comida" </input>
                                <label for="comida"><span><span class="letra_azul">C</span>omida</label>
                                <!--<input type=checkbox name=mage >Comida/bebida-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="comunicaciones" name="listaPlantillas[]" value="comunicaciones" </input>
                                <label for="comunicaciones"><span><span class="letra_azul">C</span>omunicaciones</span></label>
                                <!--<input type=checkbox name=moto >Comunicaciones-->
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="deporte" name="listaPlantillas[]" value="deporte" </input>
                                <label for="deporte"><span><span class="letra_azul">D</span>eportes</span></label>
                                <!--<input type=checkbox name=power >Deporte-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="diseno" name="listaPlantillas[]" value="diseno" </input>
                                <label for="diseno"><span><span class="letra_azul">D</span>ise&ntilde;o</span></label>
                                <!--<input type=checkbox name=php >Diseño-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="diseno_exterior" name="listaPlantillas[]" value="diseno_exterior" </input>
                                <label for="diseno_exterior"><span><span class="letra_azul">D</span>ise&ntilde;o exterior</span></label>
                                <!--<input type=checkbox name=face >Diseño exterior-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="educacion" name="listaPlantillas[]" value="educacion" </input>
                                <label for="educacion"><span><span class="letra_azul">E</span>ducaci&oacute;n</span></label>
                                <!--<input type=checkbox name=flash >Educación-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="electronica" name="listaPlantillas[]" value="electronica" </input>
                                <label for="electronica"><span><span class="letra_azul">E</span>lectr&oacute;nica</span></label>
                                <!--<input type=checkbox name=flash >Electrónica-->
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="entretenimiento" name="listaPlantillas[]" value="entretenimiento" </input>
                                <label for="entretenimiento"><span><span class="letra_azul">E</span>ntretenimiento</span></label>
                                <!--<input type=checkbox name=word >Entretenimiento-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="familia" name="listaPlantillas[]" value="familia" </input>
                                <label for="familia"><span><span class="letra_azul">F</span>amilia</span></label>
                                <!--<input type=checkbox name=joom >Familia-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="flores" name="listaPlantillas[]" value="flores" </input>
                                <label for="flores"><span><span class="letra_azul">F</span>lores</span></label>
                                <!--<input type=checkbox name=presta >Flores-->
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="herramientas" name="listaPlantillas[]" value="herramientas" </input>
                                <label for="herramientas"><span><span class="letra_azul">H</span>erramientas</label>
                                <!--<input type=checkbox name=mage >Herramientas / equipos-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="hobbies" name="listaPlantillas[]" value="hobbies" </input>
                                <label for="hobbies"><span><span class="letra_azul">H</span>obbies</span></label>
                                <!--<input type=checkbox name=moto >Hobbies-->
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="hoteles" name="listaPlantillas[]" value="hoteles" </input>
                                <label for="hoteles"><span><span class="letra_azul">H</span>oteles</span></label>
                                <!--<input type=checkbox name=power >Hoteles-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="industria" name="listaPlantillas[]" value="industria" </input>
                                <label for="industria"><span><span class="letra_azul">I</span>ndustria</span></label>
                                <!--<input type=checkbox name=php >Industria-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="inmobiliaria" name="listaPlantillas[]" value="inmobiliaria" </input>
                                <label for="inmobiliaria"><span><span class="letra_azul">I</span>nmobiliaria</span></label>
                                <!--<input type=checkbox name=face >Inmobiliaria-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="interior" name="listaPlantillas[]" value="interior" </input>
                                <label for="interior"><span><span class="letra_azul">I</span>nterior/<span class="letra_azul">M</span>uebles</span></label>
                                <!--<input type=checkbox name=flash >Interior / muebles-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="internet" name="listaPlantillas[]" value="internet" </input>
                                <label for="internet"><span><span class="letra_azul">I</span>nternet</span></label>
                                <!--<input type=checkbox name=flash >Internet-->
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="juegos" name="listaPlantillas[]" value="juegos" </input>
                                <label for="juegos"><span><span class="letra_azul">J</span>uegos</span></label>
                                <!--<input type=checkbox name=word >Juegos-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="leyes" name="listaPlantillas[]" value="leyes" </input>
                                <label for="leyes"><span><span class="letra_azul">L</span>eyes/<span class="letra_azul">D</span>erecho</span></label>
                                <!--<input type=checkbox name=joom >Leyes / derecho-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="libros" name="listaPlantillas[]" value="libros" </input>
                                <label for="libros"><span><span class="letra_azul">L</span>ibros</span></label>
                                <!--<input type=checkbox name=presta >Libros-->
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="medicina" name="listaPlantillas[]" value="medicina" </input>
                                <label for="medicina"><span><span class="letra_azul">M</span>edicina</span></label>
                                <!--<input type=checkbox name=mage >Medicina-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="medio_ambiente" name="listaPlantillas[]" value="medio_ambiente" </input>
                                <label for="medio_ambiente"><span><span class="letra_azul">M</span>edio ambiente</span></label>
                                <!--<input type=checkbox name=moto >Medio ambiente-->
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="militar" name="listaPlantillas[]" value="militar" </input>
                                <label for="militar"><span><span class="letra_azul">M</span>ilitar</span></label>
                                <!--<input type=checkbox name=power >Militar-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="moda" name="listaPlantillas[]" value="moda" </input>
                                <label for="moda"><span><span class="letra_azul">M</span>oda</span></label>
                                <!--<input type=checkbox name=php >Moda-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="musica" name="listaPlantillas[]" value="musica" </input>
                                <label for="musica"><span><span class="letra_azul">M</span>&uacute;sica</span></label>
                                <!--<input type=checkbox name=face >Música-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="ordenadores" name="listaPlantillas[]" value="ordenadores" </input>
                                <label for="ordenadores"><span><span class="letra_azul">O</span>rdenadores</label>
                                <!--<input type=checkbox name=flash >Ordenadores / computadoras-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="personales" name="listaPlantillas[]" value="personales" </input>
                                <label for="personales"><span><span class="letra_azul">P</span>&aacute;gina personal</span></label>
                                <!--<input type=checkbox name=flash >Páginas personales-->
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="politica" name="listaPlantillas[]" value="politica" </input>
                                <label for="politica"><span><span class="letra_azul">P</span>ol&iacute;tica</span></label>
                                <!--<input type=checkbox name=word >Política-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="religion" name="listaPlantillas[]" value="religion" </input>
                                <label for="religion"><span><span class="letra_azul">R</span>eligi&oacute;n</span></label>
                                <!--<input type=checkbox name=joom >Religión-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="restaurantes" name="listaPlantillas[]" value="restaurantes" </input>
                                <label for="restaurantes"><span><span class="letra_azul">R</span>estaurantes</span></label>
                                <!--<input type=checkbox name=presta >Restaurantes-->
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="regalos" name="listaPlantillas[]" value="regalos" </input>
                                <label for="regalos"><span><span class="letra_azul">R</span>egalos</span></label>
                                <!--<input type=checkbox name=mage >Regalos-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="servicios_mantenimiento" name="listaPlantillas[]" value="servicios_mantenimiento" </input>
                                <label for="servicios_mantenimiento"><span><span class="letra_azul">S</span>ervicios</span></label>
                                <!--<input type=checkbox name=moto >Servicios de mantenimiento-->
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="sociedad" name="listaPlantillas[]" value="sociedad" </input>
                                <label for="sociedad"><span><span class="letra_azul">S</span>ociedad</label>
                                <!--<input type=checkbox name=power >Sociedad / cultura-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="cultura" name="listaPlantillas[]" value="cultura" </input>
                                <label for="cultura"><span><span class="letra_azul">C</span>ultura</span></label>
                                <!--<input type=checkbox name=php >Tabaco-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="transportes" name="listaPlantillas[]" value="transportes" </input>
                                <label for="transportes"><span><span class="letra_azul">T</span>ransportes</span></label>
                                <!--<input type=checkbox name=face >Transportes-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="vacaciones" name="listaPlantillas[]" value="vacaciones" </input>
                                <label for="vacaciones"><span><span class="letra_azul">V</span>acaciones</span></label>
                                <!--<input type=checkbox name=flash >Vacaciones-->
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="viajes" name="listaPlantillas[]" value="viajes" </input>
                                <label for="viajes"><span><span class="letra_azul">V</span>iajes</span></label>
                                <!--<input type=checkbox name=flash >Viajes-->
                                </td>
			
			</tr>


			

			

			</table>
			

		</FORM>
                
                <a href="#"><img class="boton_siguiente" src="<?php echo base_url();?>imagenes/siguiente.png" onclick="enviar_formulario_plantillas('formulario_plantillas');"/> </a>
                
</div>
