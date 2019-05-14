<div class="row wow fadeIn">
        <div class="col-md-12 mb-12">
            <div class="card mb-12">
                <div class="card-header text-left">
                    Definición de Datos 
                </div>
                    <div class="card-body">
                        <!-- <canvas id="pieChart"></canvas> -->
                        <form class="form-horizontal" id="create" >
                            <div class="form-group">
                                <textarea class="form-control" id="editorSQL" name ="query" rows="9"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Generar</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="js/comandos.js"></script>
    <script>
            $(document).ready(function(){
                CreateDDL('#create');
                // llenarCombos('model/php/comboCapacitaciones.php', '#showTables', 'idCapacitacion', 'descripcion')

                $('#resultado').hide();
            })
    </script>