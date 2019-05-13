<div class="row wow fadeIn" id="app">
    <div class="col-md-12 mb-12">
        <div class="card mb-12">
            <div class="card-header text-left">
                @{{titulo}}
            </div>
            <div class="card-body">
                <form action="" id="formulario">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="database"><i class="fa fa-database fa-lg mr-2"></i>Seleccione una base de datos</label>
                                <select class="js-example-basic-single form-control" name="database" id="database" required>
                                    <option value=""></option>
                                    <option v-for="database of databases" :value="database.schema_name">
                                        @{{database.schema_name}}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="database"><i class="fa fa-table fa-lg mr-2"></i>Seleccione una tabla</label>
                                <select class="js-example-basic-single form-control" name="table" id="table" required>
                                    <option value=""></option>
                                    <option :value="table.table_name" v-for="table of tables">@{{table.table_name}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label><i class="fa fa-columns fa-lg mr-2"></i>Seleccione una o varias columnas</label>
                                <select class="js-example-basic-multiple form-control" id="columns" multiple="multiple" v-model="selectColumns" required>
                                    <option value=""></option>
                                    <option v-for="column of columns" :value="column.column_name">@{{column.column_name}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <label class="mt-3"><i class="fa fa-terminal fa-lg mr-2"></i>Sentencia SQL que se ejecutará</label>
                    <div class="row border p-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="text-primary">SELECT</span>
                                <span class="text-info" v-for="selectColumn of selectColumns">@{{selectColumn}}, </span>
                                <br>
                                <span class="text-primary">FROM</span> <span class="text-secondary">@{{selectTable}}</span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-play fa-lg mr-2"></i>Ejecutar setencia</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
     <div class="card">
        <div class="card-header">Resutlado</div>
        <div class="card-body">
            ...
        </div>
    </div>
</div>
</div>