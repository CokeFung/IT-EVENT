@extends('layouts.app')

@section('content')
    <div class="main dsktop">
        <H1 class="text-center" style="margin: 50px 0 75px 0;">Profile</H1>
        <center>
        <div style="width: 50vw; text-align: left;">
            <img src="/uploads/avatar/{{ $user->avatar }}"
            style="width: 150px; height: 150px; float: left;
            border-radius: 50%; margin-right: 25px">
            <form enctype="multipart/form-data" action="{{ url('/profile') }}" method="POST">
                <h2>Name : <input type="text" name="name" value="{{ $user->name }}"  class="form-input-login"></h2>
                <label>Update Profile Image</label>
                <input type="file" name="avatar" style="background-color: #cf6766; width: 19vw; border-radius: 8px;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn-submit">
            </form>
        </div>
        </center>
    </div>
@endsection

@section('navv')
        <H1 class="text-center" style="margin: 50px 0 75px 0;">Profile</H1>
        <center>
        <div style="display: block;">
                <img src="/uploads/avatar/{{ $user->avatar }}"
                style="width: 150px; height: 150px;
                border-radius: 50%; margin-right: 25px;">
        </div>
        <div style="width: 50vw; text-align: center; min-width: 250px;">
            <form enctype="multipart/form-data" action="{{ url('/profile') }}" method="POST">
                <br><h2>Name :<br><input type="text" name="name" value="{{ $user->name }}"  class="form-input-login"></h2>
                <label>Update Profile Image</label><br>
                <input type="file" name="avatar" style="background-color: #cf6766; width: 19vw; border-radius: 8px; min-width: 170px;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn-submit">
            </form>
        </div>
        </center>
@endsection

