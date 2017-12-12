@extends('layouts.app')

@section('content')
                <div class="main dsktop column">
    
                    <H1 class="text-center" style="margin: 50px 0 75px 0;">Reset Password</H1>
                    <center>
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="email"><h4>E-Mail Address :</h4></label>
                            </div>

                            <div>
                                <input id="email" type="email" class="form-input-login" name="email" value="{{ $email or old('email') }}" required autofocus>

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
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="password"><h4>Password</h4></label>
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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="password-confirm"><h4>Confirm Password</h4></label>
                            </div>

                            <div>
                                <input id="password-confirm" type="password" class="form-input-login" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                <p>
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-submit">
                                <h5>Reset Password</h5>
                            </button>
                        </div>
                    </form>
                    </center>
                </div>
@endsection

@section('navv')
    
                    <H1 class="text-center" style="margin: 50px 0 75px 0;">Reset Password</H1>
                    <center>
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="email"><h4>E-Mail Address :</h4></label>
                            </div>

                            <div>
                                <input id="email" type="email" class="form-input-login" name="email" value="{{ $email or old('email') }}" required autofocus>

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
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="password"><h4>Password</h4></label>
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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="text-title-form"  style="width: 30vw; min-width: 200px;">
                                <label for="password-confirm"><h4>Confirm Password</h4></label>
                            </div>

                            <div>
                                <input id="password-confirm" type="password" class="form-input-login" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                <p>
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-submit">
                                <h5>Reset Password</h5>
                            </button>
                        </div>
                    </form>
                    </center>
@endsection