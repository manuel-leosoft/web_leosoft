<script>

var params="";

    //$("#contenido").addClass('pestana_centro');
    
    /*
    * Funci—n que calcula el nœmero de plantillas de un tema o temas seleccionados
    */
    function numero_plantillas(id){
        var elemento = document.getElementById(id);
        var cadena_tema = "";
        
        var direccion = "<?php echo $this->session->userdata('url');?>";
       
        if(elemento.checked==true){
            params = params + elemento.value + "=" + elemento.value+"&";
            
             $("#tema_plantilla").append(" "+cadena_tema+id);
        }
        else{
            cadena = elemento.value + "=" + elemento.value+"&";
            params = params.replace(cadena,"");
            
            var texto = $("#tema_plantilla").text();
            cadena_tema = texto.replace(id,"");
            $("#tema_plantilla").html(" "+cadena_tema);
        }
        
        if(params!=""){
            $.ajax({ 
                    async: false,
                    type: "POST",
                    url: direccion + "index.php/plantillas/contador_numero_plantillas",
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
    
    
    /*
    * Funci—n que muestra los paneles de filtro de plantillas
    */
    function mostrar_filtro(t){
        if(t=='tipo'){
            var display=$("#lista_tipo_plantilla").css("display");
            if(display=='none'){
                $("#lista_tipo_plantilla").css("display","block");
            }
            else{
                $("#lista_tipo_plantilla").css("display","none");
            }
        }
        else if(t=='tema'){
            var display=$("#lista_plantillas").css("display");
            if(display=='none'){
                $("#lista_plantillas").css("display","block");
            }
            else{
                $("#lista_plantillas").css("display","none");
            }
        }
    }
    
    /*
    * Funci—n que muestra los tipos de plantilla seleccionados
    */
    function marcar_opciones(v){
        var cadena_tipo = "";
        if($("#"+v).is(':checked')){
            //$("#tipo_plantilla").append(" "+cadena_tipo+v);
            params = params + v + "=" + v + "&";
        }
        else{
            
            cadena = v + "=" + v +"&";
            params = params.replace(cadena,"");
            
            /*var texto = $("#tipo_plantilla").text();
            cadena_tipo = texto.replace(v,"");
            $("#tipo_plantilla").html(" "+cadena_tipo);*/
        }
        //llamada a la funci—n que calcula el nœmero de plantillas
        numero_plantillas(v);
    }
    
    
</script>

 <span class="plantilla">Seleccione el tema de su plantilla:</span>
 
 
 <div style="display:block">
		<FORM id="formulario_plantillas" style="padding-top:30px;"  ACTION="<?php echo base_url();?>index.php/plantillas/mostrar" METHOD="GET">
                        <div onclick="mostrar_filtro('tipo');"style="padding:5px;border:1px solid black;width:50px;text-align:center;background-color:white;">Tipo</div> 
                        <span id="tipo_plantilla"></span>
                        <div id="lista_tipo_plantilla" style="display:none;">
                            HTML<input onclick="marcar_opciones(this.value);" type="checkbox" id="html" name="listaTipos[]" value="html" />
                            JOOMLA<input onclick="marcar_opciones(this.value);" type="checkbox" id="joomla" name="listaTipos[]" value="joomla" />
                            WORDPRESS<input onclick="marcar_opciones(this.value);" type="checkbox" id="wordpress" name="listaTipos[]" value="wordpress" />
                        </div>
                        <div onclick="mostrar_filtro('tema');"style="padding:5px;border:1px solid black;width:50px;text-align:center;background-color:white;">Tema</div>
                        <span id="tema_plantilla"></span>
                        
			<table id="lista_plantillas" style="display:none;">

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="adultos" name="listaPlantillas[]" value="adultos" />
                                <label for="adultos"><span><span class="letra_azul">A</span>dultos</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="agricultura" name="listaPlantillas[]" value="agricultura" />
                                <label for="agricultura"><span><span class="letra_azul">A</span>gricultura</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="alojamiento" name="listaPlantillas[]" value="alojamiento" />
                                <label for="alojamiento"><span><span class="letra_azul">A</span>lojamiento</span></label>
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="animales" name="listaPlantillas[]" value="animales" />
                                <label for="animales"><span><span class="letra_azul">A</span>nimales</label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="antiguedades" name="listaPlantillas[]" value="antiguedades" />
                                <label for="antiguedades"><span><span class="letra_azul">A</span>ntig&#252;edades</span></label>
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="fotografia" name="listaPlantillas[]" value="fotografia" />
                                <label for="fotografia"><span><span class="letra_azul">A</span>rte y fotograf&iacute;a</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="belleza" name="listaPlantillas[]" value="belleza" />
                                <label for="belleza"><span><span class="letra_azul">B</span>elleza</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="bodas" name="listaPlantillas[]" value="bodas" />
                                <label for="bodas"><span><span class="letra_azul">B</span>odas</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="cafe" name="listaPlantillas[]" value="cafe" />
                                <label for="cafe"><span><span class="letra_azul">C</span>af&eacute;</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="casino" name="listaPlantillas[]" value="casino" />
                                <label for="casino"><span><span class="letra_azul">C</span>asino online</span></label>
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="ciencia" name="listaPlantillas[]" value="ciencia" />
                                <label for="ciencia"><span><span class="letra_azul">C</span>iencia</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="clubs_nocturnos" name="listaPlantillas[]" value="clubs_nocturnos" />
                                <label for="clubs_nocturnos"><span><span class="letra_azul">C</span>lubs nocturnos</span></label>
                                </td>
                            
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="coches" name="listaPlantillas[]" value="coches" />
                                <label for="coches"><span><span class="letra_azul">C</span>oches</span></label>
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="comida" name="listaPlantillas[]" value="comida" />
                                <label for="comida"><span><span class="letra_azul">C</span>omida</label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="comunicaciones" name="listaPlantillas[]" value="comunicaciones" />
                                <label for="comunicaciones"><span><span class="letra_azul">C</span>omunicaciones</span></label>
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="deporte" name="listaPlantillas[]" value="deporte" />
                                <label for="deporte"><span><span class="letra_azul">D</span>eportes</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="diseno" name="listaPlantillas[]" value="diseno" />
                                <label for="diseno"><span><span class="letra_azul">D</span>ise&ntilde;o</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="diseno_exterior" name="listaPlantillas[]" value="diseno_exterior" />
                                <label for="diseno_exterior"><span><span class="letra_azul">D</span>ise&ntilde;o exterior</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="educacion" name="listaPlantillas[]" value="educacion" />
                                <label for="educacion"><span><span class="letra_azul">E</span>ducaci&oacute;n</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="electronica" name="listaPlantillas[]" value="electronica" />
                                <label for="electronica"><span><span class="letra_azul">E</span>lectr&oacute;nica</span></label>
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="entretenimiento" name="listaPlantillas[]" value="entretenimiento" />
                                <label for="entretenimiento"><span><span class="letra_azul">E</span>ntretenimiento</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="familia" name="listaPlantillas[]" value="familia" />
                                <label for="familia"><span><span class="letra_azul">F</span>amilia</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="flores" name="listaPlantillas[]" value="flores" />
                                <label for="flores"><span><span class="letra_azul">F</span>lores</span></label>
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="herramientas" name="listaPlantillas[]" value="herramientas" />
                                <label for="herramientas"><span><span class="letra_azul">H</span>erramientas</label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="hobbies" name="listaPlantillas[]" value="hobbies" />
                                <label for="hobbies"><span><span class="letra_azul">H</span>obbies</span></label>
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="hoteles" name="listaPlantillas[]" value="hoteles" />
                                <label for="hoteles"><span><span class="letra_azul">H</span>oteles</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="industria" name="listaPlantillas[]" value="industria" />
                                <label for="industria"><span><span class="letra_azul">I</span>ndustria</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="inmobiliaria" name="listaPlantillas[]" value="inmobiliaria" />
                                <label for="inmobiliaria"><span><span class="letra_azul">I</span>nmobiliaria</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="interior" name="listaPlantillas[]" value="interior" />
                                <label for="interior"><span><span class="letra_azul">I</span>nterior/<span class="letra_azul">M</span>uebles</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="internet" name="listaPlantillas[]" value="internet" />
                                <label for="internet"><span><span class="letra_azul">I</span>nternet</span></label>
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="juegos" name="listaPlantillas[]" value="juegos" />
                                <label for="juegos"><span><span class="letra_azul">J</span>uegos</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="leyes" name="listaPlantillas[]" value="leyes" />
                                <label for="leyes"><span><span class="letra_azul">L</span>eyes/<span class="letra_azul">D</span>erecho</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="libros" name="listaPlantillas[]" value="libros" />
                                <label for="libros"><span><span class="letra_azul">L</span>ibros</span></label>
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="medicina" name="listaPlantillas[]" value="medicina" />
                                <label for="medicina"><span><span class="letra_azul">M</span>edicina</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="medio_ambiente" name="listaPlantillas[]" value="medio_ambiente" />
                                <label for="medio_ambiente"><span><span class="letra_azul">M</span>edio ambiente</span></label>
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="militar" name="listaPlantillas[]" value="militar" />
                                <label for="militar"><span><span class="letra_azul">M</span>ilitar</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="moda" name="listaPlantillas[]" value="moda" />
                                <label for="moda"><span><span class="letra_azul">M</span>oda</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="musica" name="listaPlantillas[]" value="musica" />
                                <label for="musica"><span><span class="letra_azul">M</span>&uacute;sica</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="ordenadores" name="listaPlantillas[]" value="ordenadores" />
                                <label for="ordenadores"><span><span class="letra_azul">O</span>rdenadores</label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="personales" name="listaPlantillas[]" value="personales" />
                                <label for="personales"><span><span class="letra_azul">P</span>&aacute;gina personal</span></label>
                                </td>
			
			</tr>

			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="politica" name="listaPlantillas[]" value="politica" />
                                <label for="politica"><span><span class="letra_azul">P</span>ol&iacute;tica</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="religion" name="listaPlantillas[]" value="religion" />
                                <label for="religion"><span><span class="letra_azul">R</span>eligi&oacute;n</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="restaurantes" name="listaPlantillas[]" value="restaurantes" />
                                <label for="restaurantes"><span><span class="letra_azul">R</span>estaurantes</span></label>
                                </td>
				
				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="regalos" name="listaPlantillas[]" value="regalos" />
                                <label for="regalos"><span><span class="letra_azul">R</span>egalos</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="servicios_mantenimiento" name="listaPlantillas[]" value="servicios_mantenimiento" />
                                <label for="servicios_mantenimiento"><span><span class="letra_azul">S</span>ervicios</span></label>
                                </td>

			</tr>
			<tr>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="sociedad" name="listaPlantillas[]" value="sociedad" />
                                <label for="sociedad"><span><span class="letra_azul">S</span>ociedad</label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="cultura" name="listaPlantillas[]" value="cultura" />
                                <label for="cultura"><span><span class="letra_azul">C</span>ultura</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="transportes" name="listaPlantillas[]" value="transportes" />
                                <label for="transportes"><span><span class="letra_azul">T</span>ransportes</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="vacaciones" name="listaPlantillas[]" value="vacaciones" />
                                <label for="vacaciones"><span><span class="letra_azul">V</span>acaciones</span></label>
                                </td>

				<td>
                                <input onclick="numero_plantillas(this.id);" type="checkbox" id="viajes" name="listaPlantillas[]" value="viajes" />
                                <label for="viajes"><span><span class="letra_azul">V</span>iajes</span></label>
                                </td>
			
			</tr>


			

			

			</table>

		</FORM>
                
                <a href="<?php echo base_url();?>index.php/plantillas/mostrar?todas">Ver todas </a>
                <a href="#"><img class="boton_siguiente" src="<?php echo base_url();?>imagenes/siguiente.png" onclick="enviar_formulario_plantillas('formulario_plantillas');"/> </a>
                
</div>
