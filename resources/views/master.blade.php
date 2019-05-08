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
    Dashboard BI
@endsection
@section('Contenido')
    @include('contenedor.index')
@endsection