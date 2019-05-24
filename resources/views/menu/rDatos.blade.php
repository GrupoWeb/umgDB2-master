@extends('layaout.principal')
@section('titulo')
Proyecto Final UMG
@endsection

@section('logo')
<img src= "img/logo.png" class="logo" alt="">
@endsection

@section('Title')
<h5 class="TitleFundacion">Proyecto Final UMG | DB2</h5>
@endsection

@section('Menu')
<ul>
    <li>
        <a href="{{ action('MenuController@index') }}" id="dash" class="list-group-item list-group-item-action  waves-effect">
            <i class="fa fa-pie-chart mr-3"></i>Dashboard BI
        </a>
    </li>
    <li>
        <a href="{{ action('MenuController@rDato') }}"  id="capacitadores" class="list-group-item list-group-item-action active waves-effect">
            <i class="fa fa-user mr-3"></i>Recuperación de Datos
        </a>
    </li>
    <li>
        <a  href="{{ action('MenuController@mDato') }}" id="capacitaciones" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-table mr-3"></i>Manipulación de Datos (DML)
        </a>
    </li>
    <li>
        <a href="{{ action('MenuController@dDato') }}" id="preguntas" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-map mr-3"></i>Definición de Datos (DDL)
        </a>
    </li>
    <li>
        <a href="{{ action('MenuController@cDato') }}" id="ingreso" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-money mr-3"></i>Control de Datos (DCL)
        </a>
    </li>
    <li>
        <a href="{{ action('MenuController@oDato') }}" id="reportes" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-money mr-3"></i>Otros Grupos
        </a>
    </li>
</ul>
@endsection

@section('lugar')
Recuperación de Datos
@endsection

@section('Contenido')
@include('contenedor.rDato')
@endsection

@section('vue')
<script>
    const app = new Vue({
        el: '#app',
        data: {
            titulo: 'Recuperación de datos',
            databases: [],
            tables: [],
            columns: [],
            columns2: [],
            columns3: [],
            selectDatabase: '',
            selectTable: '',
            selectColumns: [],
            sql: '',
            encabezados: [],
            resultado: [],
            tipo_join: '',
            selctTable2: '',
            selectColumn2: '',
            selectColumn_table1: '',
            selectTable3: '',
            selectColumn3: '',
            operador: '',
            valor: ''
        },
        methods:{
            getTables: function(table_schema){
                fetch(`recuperacion/get/tables/${table_schema}`)
                .then(response => response.json())
                .then(response => {
                    this.tables = [];
                    this.tables = response;
                });
            },

            getColumns: function(table_name){
                fetch(`recuperacion/database/${this.selectDatabase}/table/${table_name}/get/columns`)
                .then(response => response.json())
                .then(response => {
                    this.columns = [];
                    this.columns = response;
                });
            },

            getColumns2: function(table_name){
                fetch(`recuperacion/database/${this.selectDatabase}/table/${table_name}/get/columns`)
                .then(response => response.json())
                .then(response => {
                    this.columns2 = []
                    this.columns2 = response;
                });
            },

            getColumns3: function(table_name){
                fetch(`recuperacion/database/${this.selectDatabase}/table/${table_name}/get/columns`)
                .then(response => response.json())
                .then(response => {
                    this.columns3 = response;
                });
            },

            ejecutarConsulta: function(){
                let data = new FormData(formulario);
                fetch('recuperacion/ejecutar-sql', {
                    method: 'POST',
                    body: data
                })
                .then(response => response.json())
                .then(response => {
                    this.resultado = response;
                });
            }
        },

        created: function(){
            fetch('recuperacion/get/databases')
            .then(response => response.json())
            .then(response => {
                this.databases = response;
            });
        }
    });

    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();

    $('#database').change(function(event){
        app.selectDatabase = event.target.value;
        app.getTables(app.selectDatabase);
        $('.js-example-basic-single').select2();
    });

    $('#table').change(function(event){
        app.selectTable = event.target.value;
        app.columns = app.getColumns(event.target.value);
        $('.js-example-basic-multiple').select2();
    });


    $('#table2').change(function(event){
        app.getColumns2(event.target.value);
        $('.js-example-basic-multiple').select2();
    });

    $('#table3').change(function(event){
        app.getColumns3(event.target.value);
    });

    $columns = $('#columns');
    $columns.change(function(){
        app.selectColumns = $columns.val();
    });

    var formulario = document.getElementById('formulario');
</script>
@endsection
