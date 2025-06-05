@extends('templates.base')
@section('title', 'Error 403')
@section('header', 'Error 403')
@section('content')
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center m-b-20">
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/denied.png') }}" alt="403" class="img-fluid"
                    style="width: 50%; height: auto;">
                </div>
                <div class="col-lg-6 text-center">
                    <h1 class="display-1">403</h1>
                    <h2>Acceso no autorizado</h2>
                    <a href="javascript:history.back()">
                        <h4 class="text-sucess">Volver</h4>
                    </a>
                </div>
            </div>
        </div>Add commentMore actions
    </div>
@endsection