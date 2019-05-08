<div class="row wow fadeIn">
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
            <div class="card mb-9">
                <div class="card-header text-left">
                    Editor SQL
                </div>
                    <div class="card-body">
                            <form class="form-horizontal" id="create" >
                                    <div class="form-group">
                                        <textarea class="form-control" id="editorSQL" name ="query" rows="9"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Generar</button>
                            </form>
                    </div>
            </div>
        </div> 
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="card mb-3">
                    <div class="card-header text-left">
                        Tablas Disponibles
                    </div>
                        <div class="card-body">
                                <select class="custom-select" id="showTables" name="dummy" size="13" multiple="multiple" ondblclick="insertValueQuery()">
                                        <option value="`id`" title="">id</option>
                                        <option value="`nombre`" title="">nombre</option>
                                        <option value="`apellido`" title="">apellido</option>
                                        <option value="`edad`" title="">edad</option>
                                </select>
                                
                        </div>
                </div>
            </div>
    </div>
    <script>
            $(document).ready(function(){
                CreateSQL('#create');
                llenarCombos('model/php/comboCapacitaciones.php', '#showTables', 'idCapacitacion', 'descripcion')
            
                $('#resultado').hide();
            })
            </script>