@extends('layouts.app')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="{{url('/') }}">IoTView</a>
    </div>
    <div class="register-box-body">
        <p class="login-box-msg">Registrese como nuevo usuario</p>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group has-feeback">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre completo" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feeback">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group has-feeback">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feeback">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Password" required>
            </div>
            <div class="form-group has-feeback">
                <input id="Direccion" type="text" class="form-control" name="Direccion" placeholder="Dirección">
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox">Acepto los <a href="#" >terminos</a>
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        Registrarse
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
