@extends('layouts.app')

@section('content')
        <!--main page content desktop only-->
        <div class="main dsktop column">
          <!--Content selector button-->
            <div class="main-pageselector">
            <button class="tablink" onclick="openPage('Home', this, '#30415D')">Parties</button>
            <button class="tablink" onclick="openPage('News', this, '#30415D')" id="defaultOpen">Sports</button>
            <button class="tablink" onclick="openPage('Contact', this, '#30415D')">Conferences</button>
            <button class="tablink" onclick="openPage('About', this, '#30415D')">Workshops</button>
            <!--content page-->
              <div id="Home" class="tabcontent">
                <h3>Parties, Concerts & Festivals</h3>
                @foreach($event1['events1'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
              </div>
              
              <div id="News" class="tabcontent">
                <h3>Sports & Activities</h3>
                @foreach($event1['events2'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
              </div>
              
              <div id="Contact" class="tabcontent">
                <h3>Conferences & Seminars</h3>
                @foreach($event1['events3'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
              </div>
              
              <div id="About" class="tabcontent">
                <h3>Classes & Workshops</h3>
                @foreach($event1['events4'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
              </div>
          </div>
        </div>
@endsection

@section('navv')
          <div class="main-content-mobile-selector">
            <button class="tablink" onclick="openPage('Home-mobile', this, '#30415D')">Parties</button>
            <button class="tablink" onclick="openPage('News-mobile', this, '#30415D')" id="defaultOpen">Sports</button>
            <button class="tablink" onclick="openPage('Contact-mobile', this, '#30415D')" >Conferences</button>
            <button class="tablink" onclick="openPage('About-mobile', this, '#30415D')">Workshops</button>
          </div>
<center>
          <div class="main-content-mobile-page">
            <div id="Home-mobile" class="tabcontent">
            
              <h3>Parties, Concerts & Festivals</h3>
                @foreach($event2['events1'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
            </div>
            
            <div id="News-mobile" class="tabcontent"> 
              <h3>Sports & Activities</h3>
                @foreach($event2['events2'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
            </div>
            
            <div id="Contact-mobile" class="tabcontent">
              <h3>Conferences & Seminars</h3>
                @foreach($event2['events3'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
            </div>
            
            <div id="About-mobile" class="tabcontent">
              <h3>Classes & Workshops</h3>
                @foreach($event2['events4'] as $event)
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
                      
                      <form action="{{ route('check-event') }}" method="post" class="d-inline-block">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input name="event_id" type="hidden" value="{{ $event->id }}"/>
                          <button type="submit" class="btn-submit" style="width: 30px;">
                              <h5>Check it !</h5>
                          </button>
                      </form>
                    </div>
                  </div>
                @endforeach
            </div>
          </div>
</center>
@endsection

