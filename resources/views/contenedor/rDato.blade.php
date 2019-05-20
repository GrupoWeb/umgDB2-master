<div class="row" id="app">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-left">
                @{{titulo}}
            </div>
            <div class="card-body">
                <form action="" id="formulario" @submit.prevent="ejecutarConsulta()">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-md-6 mb-3">
                            <label for="database"><i class="fa fa-database fa-lg mr-2"></i>Seleccione una base de datos</label>
                            <select class="js-example-basic-single form-control" name="database" id="database" required>
                                <option value=""></option>
                                <option v-for="database of databases" :value="database.schema_name">
                                    @{{database.schema_name}}
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">                            
                            <label for="database"><i class="fa fa-table fa-lg mr-2"></i>Seleccione una tabla</label>
                            <select class="js-example-basic-single form-control" name="table" id="table" required>
                                <option value=""></option>
                                <option :value="table.table_name" v-for="table of tables">@{{table.table_name}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-columns fa-lg mr-2"></i>Seleccione una o varias columnas</label>
                        <select class="js-example-basic-multiple form-control" id="columns" name="columns[]" multiple="multiple" required>
                            <option value=""></option>
                            <option v-for="column of columns" :value="column.column_name">@{{column.column_name}}</option>
                            <option v-for="column1 of columns2" :value="column1.column_name">@{{column1.column_name}}</option>
                        </select>
                    </div>
                    <i class="fa fa-adjust fa-lg mr-2 my-3"></i>JOIN
                    <div class="form-group my-3">
                        <label for="tipo_join">Seleccion tipo de JOIN</label>
                        <select name="tipo_join" id="tipo_join" class="form-control" v-model="tipo_join">
                            <option value=""></option>
                            <option value="INNER JOIN">INNER JOIN</option>
                            <option value="LEFT JOIN">LEFT JOIN</option>
                            <option value="RIGHT JOIN">RIGHT JOIN</option>
                            <option value="FULL OUTER JOIN">FULL OUTER JOIN</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-6 mb-3">
                                    <label for="tabla2"><i class="fa fa-table fa-lg mr-2"></i>Seleccione tabla 1</label>
                                    <select class="form-control" name="table2" id="table2" required v-model="selectTable2">
                                        <option value=""></option>
                                        <option :value="table.table_name" v-for="table of tables">@{{table.table_name}}</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label><i class="fa fa-columns fa-lg mr-2"></i>Columna de la tabla 1</label>
                                    <select class="form-control" id="columns2" name="columns2" required v-model="selectColumn2">
                                        <option value=""></option>
                                        <option v-for="column of columns2" :value="column.column_name">@{{column.column_name}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label><i class="fa fa-columns fa-lg mr-2"></i>Seleccione la columna a relacionar con la tabla principal</label>
                            <select class="form-control" id="columns_table1" name="columns_table1" v-model="selectColumn_table1">
                                <option value=""></option>
                                <option v-for="column of columns" :value="column.column_name">@{{column.column_name}}</option>
                            </select>
                        </div>
                    </div>
                    <i class="fa fa-arrows fa-lg mr-2 my-3"></i>CONDICIÓN
                    <div class="form-group row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row">
                                <div class="col-md-3 mb-3">
                                    <label for="tabla3"><i class="fa fa-table fa-lg mr-2"></i>Seleccione tabla</label>
                                    <select class="form-control" name="table3" id="table3" required v-model="selectTable3">
                                        <option value=""></option>
                                        <option :value="table.table_name" v-for="table of tables">@{{table.table_name}}</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label><i class="fa fa-columns fa-lg mr-2"></i>Columna</label>
                                    <select class="form-control" id="columns3" name="columns3" required v-model="selectColumn3">
                                        <option value=""></option>
                                        <option v-for="column of columns" :value="column.column_name">@{{column.column_name}}</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="operador">Operador</label>
                                    <select name="operador" id="operador" class="form-control" v-model="operador">
                                        <option value=""></option>
                                        <option value=">">></option>
                                        <option value="<"><</option>
                                        <option value="=">=</option>
                                        <option value="!=">!=</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label><i class="fa fa-columns fa-lg mr-2"></i>Valor</label>
                                    <input type="text" name="where" class="form-control" v-model="valor">
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label class="mt-3"><i class="fa fa-terminal fa-lg mr-2"></i>Sentencia SQL que se ejecutará</label>
                        <div class="form-group border p-2">
                            <span class="text-primary" v-if="selectColumns != ''">SELECT</span>
                            <span class="text-info" v-for="selectColumn of selectColumns">@{{selectColumn}},</span>
                            <br>
                            <span class="text-primary" v-if="selectTable != ''">FROM</span> <span class="text-secondary">@{{selectTable}}</span>
                            <br>
                            <span class="text-primary">@{{tipo_join}}</span> 
                            <span class="text-info"> @{{selectTable}}.@{{selectColumn_table1}}</span>
                            <span class="text-primary"> =</span>
                            <span class="text-info"> @{{selectTable2}}.@{{selectColumn2}}</span>
                            <br>
                            <span class="text-primary">WHERE</span>
                            <span class="text-info"> @{{selectTable3}}.@{{selectColumn3}}</span>
                            <span class="text-primary"> @{{operador}}</span>
                            <span class="text-info"> @{{valor}};</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-play fa-lg mr-2"></i>Ejecutar setencia</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-5" v-if="resultado != ''">
        <div class="card">
            <div class="card-header">Resultado</div>
            <div class="card-body">
                <ul class="list-group" v-for="result of resultado">
                    <li class="list-group-item list-group-item-action"><pre>@{{result}}</pre></li>
                </ul>
            </div>
        </div>
    </div>
</div>