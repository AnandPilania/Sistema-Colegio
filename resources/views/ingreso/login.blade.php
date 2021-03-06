@extends('layouts.padre-registro')

@section('titulo', 'Ingreso')

@section('content')
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>Por favor Ingrese a la aplicacion</h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form  id="loginForm"  method="POST" action="{{ route('login') }}">
                        <div class="form-group">
                            <label class="control-label" for="username">Cedula</label>
                            <input type="number" id="dni"  class="form-control @error('dni') is-invalid @enderror" name="dni" placeholder="00.000.000" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
                                @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                           
                             <span class="help-block small">Por favor ingrese la cedula respectiva</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                            
                        </div>
                        <div class="checkbox login-checkbox pr-4 pl-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>                            
                            <span>
                                <label class="form-check-label" for="remember"> Recordarme </label> 
                            </span>
                            <p class="help-block small">(Si es una computadora segura)</p>
                        </div>
                        <button type="submit" class="btn btn-success btn-block loginbtn">Ingresar</button>
                        <a class="btn btn-default btn-block" href="#">Registrar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection