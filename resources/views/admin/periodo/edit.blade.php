@extends('layouts.admin')

@section('titulo', 'Editar Periodo')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Periodo</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">@yield('titulo')</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">{{$periodo->nombre_periodo}}</span> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="content-error">
    <div class="hpanel">
        <div class="panel-body">
        <form action="{{route('periodos.update',$periodo->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label>Nombre de Periodo </label>
                        <input type="text" id="nombre_periodo"  class="form-control" name="nombre_periodo"  value="{{ $periodo->nombre_periodo }}" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de inicio </label>
                        <input type="date" id="fecha_inicio" class="form-control" name="fecha_inicio" value="{{ $periodo->fecha_inicio}}" >
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Fecha de Culminación </label>
                        <input type="date" id="fecha_fin" class="form-control" name="fecha_fin" value="{{ $periodo->fecha_fin}}" >
                    </div>
                    <div class="form-group col-lg-6" ></div>
                <div class="text-center pt-3 pb-3">
                    <button type="submit" class="btn btn-success loginbtn">Actualizar</button>
                    <button class="btn btn-default">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection