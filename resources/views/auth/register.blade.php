@extends('layouts.app')
@section('content')

<div class="main_reg">

    <div class="card titulo bienvenidos">
        <div class="container haztucuenta">
            <h2 class="d-none d-md-block">Hola!</h2>
            <h3 >Haz tu cuenta</h3>
        </div>
    </div>      
    <!-- form -->
    <div class="form amarillo card text-black mb-3 tarea  mx-auto container" >
        <!-- El metodo POST es más seguro para el envio de la información -->
        <form class="text-white" method="POST" action="{{route('register')}}">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre completo</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="password">Confirmar contraseña</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-w">Registrar</button>
        </form>
    </div>
</div>





@endsection