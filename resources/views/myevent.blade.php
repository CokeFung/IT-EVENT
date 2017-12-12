@extends('layouts.app')

@section('content')
    <div class="main dsktop">
    
        <H1 class="text-center" style="margin: 50px 0 40px 0;">My Event</H1>
        
        @foreach ($ownevents as $event)
        <div class="card d-inline-block" style="width: 20rem; margin-bottom: 20px;">
            
            <div class="page-con-delete {{ $event->id }}">
                <h3>
                    <strong>
                    Delete this event ?
                    </strong>
                </h3>
                <form action="{{ route('delete-event') }}" method="post" class="d-inline-block">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                    <button class="btn btn-success btn-con-delete" type="submit"><h4>Yes</h4></button>
                </form>
                
                <button class="btn btn-danger btn-con-delete" onclick="closedeletepage({{ $event->id }})""><h4>No</h4></button>
            </div>

            <img class="img-card" src="/uploads/event_avatar/{{ $event->event_avatar }}">
            <div class="card-body" style="color: white;">
            <h4 class="card-title" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 22ch;">
                {{ $event->event_name}}
            </h4>
            
            <form action="{{ route('edit-my-event') }}" method="post" enctype="multipart/form-data" class="d-inline-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                <button type="submit" class="btn-submit" style="width: 30px;">
                    <h5>Edit Event</h5>
                </button>
            </form>

            <button class="btn-delete" onclick="opendeletepage({{ $event->id }})">
                <h5>
                    <i class="fa-trash fa-2 fa"></i>
                </h5>
            </button>
          </div>
        </div>
        @endforeach
        <br><br>
    </div>

@endsection
@section('navv')
        <H1 class="text-center" style="margin: 50px 0 40px 0;">My Event</H1>
        <center>
        @foreach ($ownevents as $event)
        <div class="card d-inline-block" style="width: 20rem; margin-bottom: 20px;">
            
            <div class="page-con-delete {{ $event->id }}">
                <h3>
                    <strong>
                    Delete this event ?
                    </strong>
                </h3>
                <form action="{{ route('delete-event') }}" method="post" class="d-inline-block">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                    <button class="btn btn-success btn-con-delete" type="submit"><h4>Yes</h4></button>
                </form>
                
                <button class="btn btn-danger btn-con-delete" onclick="closedeletepage({{ $event->id }})""><h4>No</h4></button>
            </div>

            <img class="img-card" src="/uploads/event_avatar/{{ $event->event_avatar }}">
            <div class="card-body" style="color: white;">
            <h4 class="card-title" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 22ch;">
                {{ $event->event_name}}
            </h4>
            
            <form action="{{ route('edit-my-event') }}" method="post" enctype="multipart/form-data" class="d-inline-block">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                <button type="submit" class="btn-submit" style="width: 30px;">
                    <h5>Edit Event</h5>
                </button>
            </form>

            <button class="btn-delete" onclick="opendeletepage({{ $event->id }})">
                <h5>
                    <i class="fa-trash fa-2 fa"></i>
                </h5>
            </button>
          </div>
        </div>
        @endforeach
        <br><br>
    </center>
@endsection
