@extends('layouts.app')

@section('content')
        @foreach($event as $event)
        <!--main page content desktop only-->
        <div class="main dsktop column"><center>
            <H1 class="text-center" style="margin: 50px 0 40px 0;">{{ $event->event_name }}</H1>
            
            <img class="img-in-event" src="/uploads/event_avatar/{{ $event->event_avatar }}">
            
            <div class="content-event-page">
            <h5 style="text-align: left;">
              <p><strong style="font-size: 25px; color: #CF6766"><i class="fa fa-calendar-check-o fa-2"></i> Start at : </strong>{{ Carbon\Carbon::parse($event->starttime)->format('d F Y  -  H:i A') }}</p>
              <p><strong style="font-size: 25px; color: #CF6766"><i class="fa fa-calendar-times-o fa-2"></i> End at : </strong>{{ Carbon\Carbon::parse($event->endtime)->format('d F Y  -  H:i A') }}</p>


              <p style="margin-top: 45px;overflow: hidden; text-overflow: break-word; white-space: initial;">
              <strong style="font-size: 25px; color: #CF6766">
                <i class="fa fa-newspaper-o fa-2"></i> More detail :<br>
              </strong><br>
                {!! nl2br(($event->description)) !!}
              </p>
            </h5>
            
            <form action="{{ route('join-event') }}" method="post" class="d-inline-block" style="margin-bottom: 50px; margin-top: 10px;">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"/>
                <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                @isset($inevent)
                @if($inevent == '[]')
                <button type="submit" class="btn-submit" style="width: 50px;">
                  <h5>Join event</h5>
                </button>
                @else
                <button type="button" class="btn btn-secondary btn-lg" disabled style="width: 350px; padding-top: 10px;">
                  <h5>You have already in this event</h5>
                </button>
                @endif
                @endisset
            </form>
            </div>        
            <div style="width: 100%; background-color: #CF6766; border: none; text-align: left; padding-left: 10px;">
              <div class="d-inline-block" style="padding-top: 2px;">
                Members : 
              </div>
              @if($member != '[]')
              @foreach($member as $member)
                <div class="main-event-footer d-inline-block">
                <img src="/uploads/avatar/{{ $member->avatar }}" title="{{ $member->name }}">
                </div>
              @endforeach
              @endif
            </div>
        </center>
        </div>
        @endforeach
@endsection

@section('navv')
        @foreach($event1 as $event)
<center>
            <H1 class="text-center" style="margin: 50px 0 40px 0;">{{ $event->event_name }}</H1>
            
            <img class="img-in-event" src="/uploads/event_avatar/{{ $event->event_avatar }}">
            
            <div class="content-event-page">
            <h5 style="text-align: left; margin-left: -55px;">
              <p><strong style="font-size: 20px; color: #CF6766"><i class="fa fa-calendar-check-o fa-2"></i> Start at : </strong><br>{{ Carbon\Carbon::parse($event->starttime)->format('d F Y  -  H:i A') }}</p>
              <p><strong style="font-size: 20px; color: #CF6766"><i class="fa fa-calendar-times-o fa-2"></i> End at : </strong><br>{{ Carbon\Carbon::parse($event->endtime)->format('d F Y  -  H:i A') }}</p>


              <p style="margin-top: 45px;overflow: hidden; text-overflow: break-word; white-space: initial;">
              <strong style="font-size: 20px; color: #CF6766">
                <i class="fa fa-newspaper-o fa-2"></i> More detail :<br>
              </strong><br>
                {!! nl2br(($event->description)) !!}
              </p>
            </h5>
            
            <form action="{{ route('join-event') }}" method="post" class="d-inline-block" style="margin-bottom: 50px; margin-top: 10px;">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"/>
                <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                @isset($inevent1)
                @if($inevent1 == '[]')
                <button type="submit" class="btn-submit" style="width: 50px;">
                  <h5>Join event</h5>
                </button>
                @else
                <button type="button" class="btn btn-secondary btn-lg" disabled style="width: 80vw; padding-top: 10px; margin-left: -10vw;">
                  <h6>You have already in this event</h6>
                </button>
                @endif
                @endisset
            </form>
            </div>        
            <div style="width: 100%; background-color: #CF6766; border: none; text-align: left; padding-left: 10px;">
              <div class="d-inline-block" style="padding-top: 2px;">
                Members : 
              </div>
              @if($member1 != '[]')
              @foreach($member1 as $member)
                <div class="main-event-footer d-inline-block">
                <img src="/uploads/avatar/{{ $member->avatar }}" title="{{ $member->name }}">
                </div>
              @endforeach
              @endif
            </div>
</center>
        @endforeach
@endsection