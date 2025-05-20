@extends('templates.base')
@section('title', 'Tecnicó')
@section('header', 'Tecnicó')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">
        <a href="{{ route('technician.create') }}" class="btn btn-primary">Crear</a>
    </div>
</div>

@include('templates.messages')

<div class="row">
    <div class="col-lg-12 mb-4">
        <table id="table_data" class="table table-striped table-hover">
            <thead>
                <tr>
                <th>Id</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1116222333</td>
                    <td>Alba Rotte</td>
                    <td>Plomeria</td>
                    <td>(682) 996-3113</td>
                    <td>
                        <a href="#"  class="btn btn-primary btn-circle btn-sm" title="Editar">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" title="Eliminar" onclick="return remove();">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection