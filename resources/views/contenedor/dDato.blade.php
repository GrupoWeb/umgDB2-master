<div class="row wow fadeIn">
       <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <div class="card mb-8">
                <div class="card-header text-left">
                    DefiniciÃ³n de Datos 
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
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="card mb-4">
                    <div class="card-header text-left">
                        Ejemplos de Querys:
                    </div>
					<body>
                    Para Crear una Tabla: <br>
					CREATE TABLE IF NOT EXISTS tasks (<br>
				  	task_id INT AUTO_INCREMENT,<br>
					title VARCHAR(255) NOT NULL,<br>
					start_date DATE,<br>
					due_date DATE,<br>
					status TINYINT NOT NULL,<br>
					priority TINYINT NOT NULL,<br>
					description TEXT,<br>
					PRIMARY KEY (task_id));<br><br>

					Para Eliminar una Tabla:<br>
					Drop table tasks;<br><br>

					Ejemplo Alter:<br>
					ALTER TABLE contacts<br>
					ADD last_name varchar(40) NOT NULL<br>
					AFTER contact_id;<br>

				</body>
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
			function copyText(texto){
                
                var message = $('textarea#editorSQL').val();
                message = message + texto;
                $('#editorSQL').val(message);
            }
    </script>
