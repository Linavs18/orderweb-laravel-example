@extends('templates.base')
@section('title', 'Test 2')
@section('content')
    <h1>Test</h1>
    <q>No soy hombre de plegarias, pero si éstas en el cielo ayúdame Superman!</q>
    <br><br>
    <small>Homer J. Simpson</small> <br>
    <button onclick="show_alert()">Clic!</button>

@endsection

@section('scripts')
    <script src="{{ asset('js/test.js') }}"></script>
@endsection

