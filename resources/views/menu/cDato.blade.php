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
        <a href="{{ action('MenuController@rDato') }}"  id="capacitadores" class="list-group-item list-group-item-action  waves-effect">
            <i class="fa fa-user mr-3"></i>Recuperación de Datos
        </a>
    </li>
    <li>
        <a  href="{{ action('MenuController@mDato') }}" id="capacitaciones" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-table mr-3"></i>Manipulación de Datos (DML)
        </a>
    </li>
    <li>
        <a href="{{ action('MenuController@dDato') }}" id="preguntas" class="list-group-item list-group-item-action  waves-effect">
            <i class="fa fa-map mr-3"></i>Definición de Datos (DDL)
        </a>
    </li>
    <li>
        <a href="{{ action('MenuController@cDato') }}" id="ingreso" class="list-group-item list-group-item-action active waves-effect">
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
    Control de Datos
@endsection

@section('Contenido')
    @include('contenedor.cDato')
@endsection

@section('vue')
<script>
const app = new Vue({
        el: '#app',
        data: {
            titulo: 'Controlador de datos',
            users: [],
            databases: [],
            objets: [],
            resultQry: '',
            qryRes: '',
            valDatabase: '',
        },
        methods:{
            execDcl: function(){
              let data = new FormData(form);

              fetch('Dcl', {
                  method: 'post',
                  body: data
              }).catch(function(error) { // (*)
                console.log("error");
              }).then(function(res) {
                if(res.status == 500){
                  return "[]";
                }else{
                  return res.text();
                }
              }).then(function(html) {
                  var resultLocal = JSON.parse(html);
                  $("#resultSuccess").hide();
                  $("#resultDanger").hide();
                  $("#grantMsj").hide();
                  $("#revokeMsj").hide();

                  var qry = resultLocal.qry
                  var premission = resultLocal.premission
                  $("#resultDiv").show();
                  if (qry === undefined || qry === null) {
                    $("#resultDanger").show();
                  }else{
                    $("#resultSuccess").show();
                    $("#qryResult").html(qry);
                    if(premission == "GRANT"){
                      $("#grantMsj").show();
                    }else{
                      $("#revokeMsj").show();
                    }
                  }
              })
            },
            getObjets: function(database){
              fetch(`DclController/get/objets/${database}`)
              .then(response => response.json())
              .then(response => {
                  this.objets = [];
                  this.objets = response;
              });
            }
        },
        created: function(){
            fetch('DclController/get/users')
            .then(response => response.json())
            .then(response => {
                this.users = response;
            });

            fetch('DclController/get/databases')
            .then(response => response.json())
            .then(response => {
                this.databases = response;
            });
        }
    });

    $('#database').change(function(event){
        app.valDatabase = event.target.value;
        app.getObjets(app.valDatabase);
    });

    var form = document.getElementById('frmDcl');
</script>
@endsection
