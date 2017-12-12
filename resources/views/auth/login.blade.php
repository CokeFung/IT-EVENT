@extends('layouts.app')

@section('content')
    <div class="main dsktop column">
    
    <H1 class="text-center" style="margin: 50px 0 75px 0;">Login</H1>

    <center>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="text-title-form" style="width: 30vw; min-width: 200px;">
                    <label for="email"><h4>E-Mail Address :</h4></label>
                </div>
                <div>
                    <input id="email" type="email" class="form-input-login" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <p>
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        </span>
                        </p>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="text-title-form" style="width: 30vw; min-width: 200px;">
                    <label for="password"><h4>Password :</h4></label>
                </div>
                <div>
                    <input id="password" type="password" class="form-input-login" name="password" required>
                    @if ($errors->has('password'))
                        <p>
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        </span>
                        </p>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-submit">
                    <h5>Login</h5>
                </button>
                <div class="form-input-login" style="text-align: right; margin-top: 5px;">
                <p><br>
                    <a class="" href="{{ route('password.request') }}" style="color: white;">
                        Forgot Your Password?
                    </a>
                </p>
                </div>         
            </div>
        </form>
    </center>
    </div>
@endsection
@section('navv')
    <H1 class="text-center" style="margin: 50px 0 75px 0;">Login</H1>

    <center>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="text-title-form" style="width: 30vw; min-width: 200px;">
                    <label for="email"><h4>E-Mail Address :</h4></label>
                </div>
                <div>
                    <input id="email" type="email" class="form-input-login" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <p>
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        </span>
                        </p>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="text-title-form" style="width: 30vw; min-width: 200px;">
                    <label for="password"><h4>Password :</h4></label>
                </div>
                <div>
                    <input id="password" type="password" class="form-input-login" name="password" required>
                    @if ($errors->has('password'))
                        <p>
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        </span>
                        </p>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-submit">
                    <h5>Login</h5>
                </button>
                <div class="form-input-login" style="text-align: right; margin-top: 5px;">
                <p><br>
                    <a class="" href="{{ route('password.request') }}" style="color: white;">
                        Forgot Your Password?
                    </a>
                </p>
                </div>         
            </div>
        </form>
    </center>
@endsection