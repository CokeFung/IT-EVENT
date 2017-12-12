@extends('layouts.app')

@section('content')
        <!--main page content desktop only-->
        <div class="main dsktop column"><center>
    <div class="main dsktop column">
    
        <H1 class="text-center" style="margin: 50px 0 40px 0;">Edit Event</H1>
        
        @foreach($myevent as $myevent)
          <center>
      <form enctype="multipart/form-data" action="{{ route('owner-edit-event') }}" method="POST">
        <!--  Event's name  -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <div class="text-title-form">
                      <label><h4>Event's name :</h4></label>
                  </div>
                  <div>
                    <h4>
                        <input type="text" class="form-create-event-name" name="name" value="{{ $myevent->event_name }}" required >
                    </h4>
                  </div>
              </div>

        <!--  Time  -->
        <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                  <div class="text-title-form">
                      <label><h4>From : <input id="datetime" type="datetime-local" name="starttime" value="{{ $myevent->starttime }}" required></h4></label>
                  </div>
                  <div class="text-title-form">
                      <label><h4>To : <input id="datetime" type="datetime-local" name="endtime" value="{{ $myevent->endtime }}" required></h4></label>
                  </div>
              </div>

              <!--  What's it about  -->
              <div>
                  <div class="text-title-form">
                    <label><h4>What's your event about ? :</h4></label>
                  </div>
                  <div class="text-title-form">
                    <h4>
                      <select name="type" value="{{ $myevent->type }}" class="form-list-select">
                          <option value="1" class="form-option-list">Parties, Concerts & Festivals</option>
                          <option value="2" class="form-option-list">Sports & Activities</option>
                          <option value="3" class="form-option-list">Conferences & Seminars</option>
                          <option value="4" class="form-option-list">Classes & Workshops</option>
                      </select>
                    </h4>
                  </div>
              </div>

              <!--  Description  -->
              <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                  <div class="text-title-form">
                      <label><h4>Description :</h4></label>
                  </div>
                  <div class="text-title-form">
                      <textarea rows="4" cols="50" name="description" maxlength="250" required>{{ $myevent->description }}</textarea>
                  </div>
              </div>

              <!--  Event's avatar  -->
              <div>
                <div>
                    <div class="text-title-form">
                      <label><h4>Event's picture (5:3) : <input type="file" name="avatar" style="background-color: #cf6766; width: 25vw;"></h4></label>
                    </div>
                </div>
              </div>
        
        <!--  Token  -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!--  ID's EVENT  -->
        <input type="hidden" name="id" value="{{ $myevent->id }}">
              <!--  Submit  -->
              <div class="form-group" style="margin-bottom: 50px;">
                  <button type="submit" class="btn-submit">
                      <h5>Save changes</h5>
                  </button>
              </div>
      </form>
      </center>

    </div>
        </div>
    </div>

@endsection

@section('navv')
    
        <H1 class="text-center" style="margin: 50px 0 40px 0;">Edit Event</H1>
          <center>
      <form enctype="multipart/form-data" action="{{ route('owner-edit-event') }}" method="POST">
        <!--  Event's name  -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <div class="text-title-form">
                      <label><h4>Event's name :</h4></label>
                  </div>
                  <div>
                    <h4>
                        <input type="text" class="form-create-event-name" name="name" value="{{ $myevent->event_name }}" required >
                    </h4>
                  </div>
              </div>

        <!--  Time  -->
        <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                  <div class="text-title-form">
                      <label><h4>From : <input id="datetime" type="datetime-local" name="starttime" value="{{ $myevent->starttime }}" required></h4></label>
                  </div>
                  <div class="text-title-form">
                      <label><h4>To : <input id="datetime" type="datetime-local" name="endtime" value="{{ $myevent->endtime }}" required></h4></label>
                  </div>
              </div>

              <!--  What's it about  -->
              <div>
                  <div class="text-title-form">
                    <label><h4>What's your event about ? :</h4></label>
                  </div>
                  <div class="text-title-form">
                    <h4>
                      <select name="type" value="{{ $myevent->type }}" class="form-list-select">
                          <option value="1" class="form-option-list">Parties, Concerts & Festivals</option>
                          <option value="2" class="form-option-list">Sports & Activities</option>
                          <option value="3" class="form-option-list">Conferences & Seminars</option>
                          <option value="4" class="form-option-list">Classes & Workshops</option>
                      </select>
                    </h4>
                  </div>
              </div>

              <!--  Description  -->
              <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                  <div class="text-title-form">
                      <label><h4>Description :</h4></label>
                  </div>
                  <div class="text-title-form">
                      <textarea rows="4" cols="50" name="description" maxlength="250" required>{{ $myevent->description }}</textarea>
                  </div>
              </div>

              <!--  Event's avatar  -->
              <div>
                <div>
                    <div class="text-title-form">
                      <label><h4>Event's picture (5:3) : <input type="file" name="avatar" style="background-color: #cf6766; width: 25vw;"></h4></label>
                    </div>
                </div>
              </div>
        
        <!--  Token  -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!--  ID's EVENT  -->
        <input type="hidden" name="id" value="{{ $myevent->id }}">
              <!--  Submit  -->
              <div class="form-group" style="margin-bottom: 50px;">
                  <button type="submit" class="btn-submit">
                      <h5>Save changes</h5>
                  </button>
              </div>
      </form>
      </center>
        @endforeach

@endsection
