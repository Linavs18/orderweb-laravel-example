@extends('templates.base')
@section('title', 'Supervisores')
@section('header', 'Supervisores')
@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('users.send_email') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-6">
                        <label for="user_id">Supervisores</label>
                        <select name="user_id" id="user_id" class="form-control" required>
                            @foreach ($users as $user)
                                <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="user_id">Mensaje:</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" required>

                        </textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary col-3">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection