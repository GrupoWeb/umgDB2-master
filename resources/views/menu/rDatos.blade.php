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
            selectDatabase: '',
            selectTable: '',
            selectColumns: [],
            sql: '',
            resultado: []
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

            getColumns: function(){
                fetch(`recuperacion/database/${this.selectDatabase}/table/${this.selectTable}/get/columns`)
                .then(response => response.json())
                .then(response => {
                    this.columns = [];
                    this.columns = response;
                });
            },

            ejecutarConsulta: function(){

            }
        },

        created: function(){
            fetch('recuperacion/get/databases')
            .then(response => response.json())
            .then(response => {
                this.databases = response;
            });
        },

        computed: {
            generarSQL: function(){
                sql = 'SELECT';
                sql += '' 
            }
        }
    });

    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();

    $('#database').change(function(event){
        app.selectDatabase = event.target.value;
        app.getTables(event.target.value);
        $('.js-example-basic-single').select2();
    });

    $('#table').change(function(event){
        app.selectTable = event.target.value;
        app.getColumns();
        $('.js-example-basic-multiple').select2();
    });

    $columns = $('#columns');
    $columns.change(function(event){
        app.selectColumns = $columns.val();
    });

    var formulario = document.getElementById('formulario');

    formulario.addEventListener('submit', function(e){
        e.preventDefault();
        let data = new FormData(formulario);

        fetch('', {
            method: 'POST',
            body: data
        })
        .then(response => response.json())
        .then(response => {
            app.resultado = response;
        });

    });
</script>
@endsection