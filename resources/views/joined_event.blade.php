@extends('layouts.app')

@section('content')
    <div class="main dsktop">
    
        <H1 class="text-center" style="margin: 50px 0 40px 0;">My Event</H1>
        
        @foreach ($ownevents as $event)
        <div class="card d-inline-block" style="width: 20rem; margin-bottom: 20px;">
            
            <div class="page-con-delete {{ $event->id }}">
                <h3>
                    <strong>
                    Leave this event ?
                    </strong>
                </h3>
                <form action="{{ route('leave-event') }}" method="post" class="d-inline-block">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                    <input name="member_id" type="hidden" value="{{ Auth::user()->id }}"/>
                    <button class="btn btn-success btn-con-delete" type="submit"><h4>Yes</h4></button>
                </form>
                
                <button class="btn btn-danger btn-con-delete" onclick="closedeletepage({{ $event->id }})""><h4>No</h4></button>
            </div>

            <img class="img-card" src="/uploads/event_avatar/{{ $event->event_avatar }}">
            <div class="card-body" style="color: white;">
            <h4 class="card-title" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 22ch;">
                {{ $event->event_name}}
            </h4>
            <button class="btn-submit" onclick="opendeletepage({{ $event->id }})" style="width:150px"><h5>Leave this event</h5></button>
          </div>
        </div>
        @endforeach
        <br><br>
    </div>

@endsection
@section('navv')

@endsection
