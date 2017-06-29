@extends('layouts.auth')

@section('content')

    <form class="col-md-12 col-sm-12 col-xs-12"  role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field col-md-12 col-sm-12 col-xs-12 {{ $errors->has('email') ? ' has-error' : '' }}" >
                <i class="ion-coffee prefix"></i>
                <input id="email" type="email" class="icon_prefix-2" name="email" value="{{ old('email') }}" required>
                <label for="icon_prefix-2">Usuario</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-field col-md-12 col-sm-12 col-xs-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                <i class="ion-key prefix"></i>
                <input id="password" type="password" class="form-control" name="password" required>
                <label for="icon_prefix-3">Contraseña</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="bottom_info">
            <a href="signup.html" class="pull-left">Registrate ahora!</a>
        </div>                            
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-primary btn-block ">
            <i class="ion-android-unlock"></i>Login
        </button>
    </form>

@endsection