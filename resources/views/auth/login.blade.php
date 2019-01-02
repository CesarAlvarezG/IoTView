@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{url('/') }}">IoTView</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Identifiquese para iniciar la sección</p>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group has-feeback">
                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="email" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                 @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                        </label>
                    </div>            
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"> Login </button>
                </div>
                <div class="col-xs-8">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Olvido su Password?
                    </a>
                </div>
            </div>    
        </form>
    </div>
</div>



@endsection
