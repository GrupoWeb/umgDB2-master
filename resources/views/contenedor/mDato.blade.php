<div class="row wow fadeIn">

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <div class="card mb-8">
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
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="card mb-4">
                    <div class="card-header text-left">
                        Tablas Disponibles
                    </div>
                        <div class="card-body">
                            @if(!empty($op))
                                <?php $x=1; ?>
                                <div class="accordion" id="accordionData">
                                    <div class="card">
                                        @foreach($op as $key)
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <a  data-toggle="collapse" data-parent="#accordionData" href="#collapse<?php echo $x; ?>">
                                                        {{ $key->tablename }}
                                                    </a>
                                                </h5>
                                            </div>
                                            @foreach ($key->fields as $item)
                                                <div  id="collapse<?php echo $x; ?>" class="panel-collapse collapse">
                                                    <div onClick="copyText(this.id);"  id="{{ $item->Field }}" class="panel-body seleccion">
                                                        {{ $item->Field }}
                                                    </div>
                                                </div>
                                            @endforeach
                                            <?php $x++; ?>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                </div>
            </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script>
            $(document).ready(function(){
                CreateSQL('#create');
                // llenarCombos('model/php/comboCapacitaciones.php', '#showTables', 'idCapacitacion', 'descripcion')

                $('#resultado').hide();
            })

            function copyText(texto){
                
                var message = $('textarea#editorSQL').val();
                message = message + texto;
                $('#editorSQL').val(message);
            }
    </script>
