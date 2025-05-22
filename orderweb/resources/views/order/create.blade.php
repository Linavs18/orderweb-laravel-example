@extends('templates.base')
@section('title', 'Crear órden')
@section('header', 'Crear órden')
@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <form action="{{ route('order.store') }}" method="post">
            @csrf
            <div class="row form-group">
                <div class="col-lg-6 mb-4">
                    <label for="legalization_date">Fecha legalización</label>
                    <input type="date" class="form-control" name="legalization_date" id="legalization_date" required>
                </div>
                <div class="col-lg-6 mb-4">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-4 mb-4">
                    <label for="city">Ciudad</label>
                    <select name="city" id="city" class="form-control">
                        <option value="TULUA">TULUA</option>
                        <option value="CALI">CALI</option>
                        <option value="BUGA">BUGA</option>
                        <option value="PALMIRA">PALMIRA</option>
                    </select>
                </div>
                <div class="col-lg-4 mb-4">
                    <label for="causal_id">Causal</label>
                    <select name="causal_id" id="causal_id" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($causals as $causal)
                            <option value="{{ $causal['id'] }}">
                                {{ $causal['description'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4 mb-4">
                    <label for="observation_id">Observación</label>
                    <select name="observation_id" id="observation_id" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($observations as $observation)
                            <option value="{{ $observation['id'] }}">
                                {{ $observation['description'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                </div>
                <br><br>
                <div class="col-lg-6">
                    <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </form>

        <br>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="alert alert-warning" role="alert">
                    <i class="fa-solid fa-lightbuld"></i> Para añadir actividades a la orden, primero debe crearla y 
                    luego dar clic en la acción editar.
                </div>

            </div>
        </div>
    </div>
</div>
    
@endsection