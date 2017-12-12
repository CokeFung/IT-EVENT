@extends('layouts.app')

@section('content')
    <div class="main dsktop">
        <H1 class="text-center" style="margin: 50px 0 50px 0;">Create an event</H1>
        <center>
        <form class="form-horizontal" method="POST" action="{{ route('create-event') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="text-title-form">
                    <label><h4>Event's name :</h4></label>
                </div>
                <div>
                <h4>
                    <input type="text" class="form-create-event-name" name="name" required >
                </h4>
                </div>
            </div>
            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                <div class="text-title-form">
                    <label><h4>From : <input id="datetime" type="datetime-local" name="starttime" required></h4></label>
                </div>
                <div class="text-title-form">
                    <label><h4>To : <input id="datetime" type="datetime-local" name="endtime" required></h4></label>
                </div>
            </div>
            <div>
                <div class="text-title-form">
                    <label><h4>What's your event about ? :</h4></label>
                </div>
                <div class="text-title-form">
                <h4>
                    <select name="type" class="form-list-select">
                        <option value="1" class="form-option-list">Parties, Concerts & Festivals</option>
                        <option value="2" class="form-option-list">Sports & Activities</option>
                        <option value="3" class="form-option-list">Conferences & Seminars</option>
                        <option value="4" class="form-option-list">Classes & Workshops</option>
                    </select>
                </h4>
                </div>
            </div>
            <br>
            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                <div class="text-title-form">
                    <label><h4>Description :</h4></label>
                </div>
                <div class="text-title-form">
                    <textarea rows="4" cols="50" name="description" value="Details of event" maxlength="250" required></textarea>
                </div>
            </div>
            <div>
              <div>
                  <div class="text-title-form">
                    <label><h4>Event's picture (5:3) : <input type="file" name="avatar" style="background-color: #cf6766; width: 25vw;"></h4></label>
                  </div>
              </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group" style="margin-bottom: 50px;">
                <button type="submit" class="btn-submit">
                    <h5>Create an event !</h5>
                </button>
            </div>
        </form>
        </center>
    </div>

@endsection

@section('navv')
        <H1 class="text-center" style="margin: 50px 0 50px 0;">Create an event</H1>
        <center>
        <form class="form-horizontal" method="POST" action="{{ route('create-event') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="text-title-form">
                    <label><h4>Event's name :</h4></label>
                </div>
                <div>
                <h4>
                    <input type="text" class="form-create-event-name" name="name" required >
                </h4>
                </div>
            </div>
            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                <div class="text-title-form">
                    <label><h4>From : <input id="datetime" type="datetime-local" name="starttime" required></h4></label>
                </div>
                <div class="text-title-form">
                    <label><h4>To : <input id="datetime" type="datetime-local" name="endtime" required></h4></label>
                </div>
            </div>
            <div>
                <div class="text-title-form">
                    <label><h4>What's your event<br>about ? :</h4></label>
                </div>
                <div class="text-title-form">
                <h4>
                    <select name="type" class="form-list-select">
                        <option value="1" class="form-option-list">Parties, Concerts & Festivals</option>
                        <option value="2" class="form-option-list">Sports & Activities</option>
                        <option value="3" class="form-option-list">Conferences & Seminars</option>
                        <option value="4" class="form-option-list">Classes & Workshops</option>
                    </select>
                </h4>
                </div>
            </div>
            <br>
            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                <div class="text-title-form ">
                    <label><h4>Description :</h4></label>
                </div>
                <div class="text-title-form">
                    <textarea rows="4" cols="50" name="description" value="Details of event" maxlength="250" required></textarea>
                </div>
            </div>
            <div>
              <div>
                  <div class="text-title-form">
                    <label><h4>Event's picture (5:3) :<br><input type="file" name="avatar" style="background-color: #cf6766; width: 25vw;"></h4></label>
                  </div>
              </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group" style="margin-bottom: 50px;">
                <button type="submit" class="btn-submit">
                    <h5>Create an event !</h5>
                </button>
            </div>
        </form>
        </center>

@endsection
