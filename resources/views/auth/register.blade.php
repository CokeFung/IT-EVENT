@extends('layouts.app')

@section('content')

                <div class="main dsktop column">
                    <H1 class="text-center" style="margin: 50px 0 75px 0;">Register</H1>

                    <center>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="name"><h4>Name :</h4></label>
                            </div>

                                <input id="name" type="text" class="form-input-login" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="email"><h4>E-Mail Address :</h4></label>
                            </div>

                                <input id="email" type="email" class="form-input-login" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;"> 
                                <label for="password"><h4>Password :</h4></label>
                            </div>


                                <input id="password" type="password" class="form-input-login" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
 
                        </div>

                        <div class="form-group">
                                <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                    <label for="password-confirm"><h4>Confirm Password :</h4></label>
                                </div>
                                <input id="password-confirm" type="password" class="form-input-login" name="password_confirmation" required>
                                
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-submit">
                                <h5>Register</h5>
                            </button>
                        </div>
                    </form>
                    </center>
                </div>
@endsection

@section('navv')

                    <H1 class="text-center" style="margin: 0px 0 75px 0;">Register</H1>

                    <center>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="name"><h4>Name :</h4></label>
                            </div>

                                <input id="name" type="text" class="form-input-login" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="email"><h4>E-Mail Address :</h4></label>
                            </div>

                                <input id="email" type="email" class="form-input-login" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;"> 
                                <label for="password"><h4>Password :</h4></label>
                            </div>


                                <input id="password" type="password" class="form-input-login" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
 
                        </div>

                        <div class="form-group">
                                <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                    <label for="password-confirm"><h4>Confirm Password:</h4></label>
                                </div>
                                <input id="password-confirm" type="password" class="form-input-login" name="password_confirmation" required>
                                
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-submit">
                                <h5>Register</h5>
                            </button>
                        </div>
                    </form>
                    </center>
@endsection
