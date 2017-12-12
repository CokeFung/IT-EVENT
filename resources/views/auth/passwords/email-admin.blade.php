@extends('layouts.app')

@section('content')
    <div class="" style="color: white; text-align: center;">
        <H1 class="text-center" style="margin: 50px 0 75px 0;">Reset Password</H1>
                    @if (session('status'))
                        <div class="alert alert-success">
                        <p>
                            {{ session('status') }}
                        </p>
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('admin.password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="text-title-form">
                                <label for="email"><h4>E-Mail Address :</h4></label>
                            </div>

                            <div>
                                <input id="email" type="email" class="form-input-login" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <p>
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </p>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-submit">
                                <h5>Send Password Reset Link</h5>
                            </button>
                        </div>
                    </form>

    </div>

@endsection
