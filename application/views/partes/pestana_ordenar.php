<div class="letra_naranja" style="display:block;float:right;padding-top:20px;font-size:0.9em;margin-right:10px;">
    Ordenado por <span class="letra_azul"><?php echo $tipo_orden; ?></span> de plantilla
    <select name="ordenar_por" id="ordenar_por" onchange="ordenar(this.value);">
        <option value="inicio">Ordenar por</option>
        <option value="tema">Tema</option>
        <option value="tipo">Tipo</option>
        <option value="popular">Popular</option>
    </select>
</div>
<br><span class='letra_azul'>NUMERO DE PLANTILLAS: </span><span class='letra_naranja' style='font-size:1.5em;'><?php echo $num_rows ?></span><br><br>