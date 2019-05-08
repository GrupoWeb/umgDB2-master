<body>
<div class="row">
    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <form class="form-horizontal" id="create" >
            <div class="form-group">
                <label for="editorSQL">Editor SQL</label>
                <textarea class="form-control" id="editorSQL" name ="query" rows="9"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Generar</button>
        </form>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <div class="input-group-prepend">
            <label >Tablas Disponibles</label>
        </div>
            <select class="custom-select" id="showTables" name="dummy" size="13" multiple="multiple" ondblclick="insertValueQuery()">
                <option value="`id`" title="">id</option>
                <option value="`nombre`" title="">nombre</option>
                <option value="`apellido`" title="">apellido</option>
                <option value="`edad`" title="">edad</option>
            </select>
    </div>
</div>

</body>
<div class="alert alert-primary" role="alert" id="resultado">
  
</div>
<script>
$(document).ready(function(){
    CreateSQL('#create');
    llenarCombos('model/php/comboCapacitaciones.php', '#showTables', 'idCapacitacion', 'descripcion')

    $('#resultado').hide();
})
</script>