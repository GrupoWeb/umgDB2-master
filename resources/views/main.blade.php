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
        <a onClick="Iniciar('../resources/views/layaout/dashboard.blade.php','Dashboard BI')" id="dash" class="list-group-item list-group-item-action active waves-effect">
            <i class="fa fa-pie-chart mr-3"></i>Dashboard BI
        </a>
    </li>
    <li>
        <a onClick="Iniciar('../resources/views/layaout/g1.php','Grupo 1')"  id="capacitadores" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-user mr-3"></i>Grupo 1
        </a>
    </li>
    <li>
        <a  onClick="Iniciar('../resources/views/layaout/dml.php','Grupo 2')" id="capacitaciones" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-table mr-3"></i>Grupo 2
        </a>
    </li>
    <li>
        <a onClick="Iniciar('../resources/views/layaout/','Grupo 3')" id="preguntas" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-map mr-3"></i>Grupo 3
        </a>
    </li>
    <li>
        <a onClick="Iniciar('../resources/views/layaout/','Grupo 4')" id="ingreso" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-money mr-3"></i>Grupo 4
        </a>
    </li>
    <li>
        <a onClick="Iniciar('../resources/views/layaout/','Grupo 5')" id="reportes" class="list-group-item list-group-item-action waves-effect">
            <i class="fa fa-money mr-3"></i>Grupo 5
        </a>
    </li>
</ul>
@endsection