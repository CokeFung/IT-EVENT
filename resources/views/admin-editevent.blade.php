<!doctype html>
<html lang="en">
  <head>
    <title>E-Ticket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ url('/icon/icon.ico') }}">
  </head>
  <body>
    <div class="content dsktop column-container">
        <!--left of screen desktop site-->
        <div class="side-navbar dsktop column">
          <!--Logo or Event name-->
          <div class="side-navbar-name">
            <h1>IT EVENT</h1>
          </div>
          <!--User Image-->
          <div class="side-navbar-user-image">
                @guest
                <img src="/uploads/avatar/default.jpg">
                @else
                <img src="./uploads/avatar/{{ Auth::user()->avatar }}">
                @endguest
          </div>
          <!--Side navigater bar menus-->
          <div class="side-navbar-menu">
                <h3 class="user-panel-name">{{ Auth::user()->name }}</h3><br>
                <p class="user-panel-2"><a href="{{ url('/admin/profile') }}"><i class="fa fa-user-o"> My Profile</i></a></p>
                <p class="user-panel-3"><a href="{{ url('/admin/edit-event')}}"><i class="fa fa-star"> Edit Event</i></a></p>
                <p class="user-panel-5"><a href="{{ url('/admin/logout') }}"><i class="fa fa-sign-out"> Log out</i></a></p>
          </div>
        </div>
        <!--main page content desktop only-->
        <div class="main dsktop column"><center>
    <div class="main dsktop column">
    
        <H1 class="text-center" style="margin: 50px 0 40px 0;">Edit Event</H1>
        
        @foreach($myevent as $myevent)
          <center>
      <form enctype="multipart/form-data" action="{{ route('admin-edit-event') }}" method="POST">
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
    <div class="content mobile">
      <div class="head-navbar">
        <a href="#" onclick="openNav()"><i class="fa fa-bars"></i></a>
      </div>
      <div class="main-content-mobile">
          <div id="mobile-menu" class="main-content-mobile-menu">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!--User Image-->
               <img src="./uploads/avatar/{{ Auth::user()->avatar }}"  style="width: 100px; margin-bottom: 20px;  margin-left: 75px;">
                <h5 style="text-align: center; padding-right: 15px; padding-left: 15px; color: white;">{{ Auth::user()->name }}</h5><br>
                <p class="user-panel-2"><a href="{{ url('/admin/profile') }}"><i class="fa fa-user-o"> My Profile</i></a></p>
                <p class="user-panel-3"><a href="{{ url('/admin/edit-event')}}"><i class="fa fa-star"> Edit Event</i></a></p>
                <p class="user-panel-5"><a href="{{ url('/admin/logout') }}"><i class="fa fa-sign-out"> Log out</i></a></p>rs/logout') }}"><i class="fa fa-sign-out"> Log out</i></a>
          </div>
          <div style="color: white; margin-top: -50px;">
    
        <H1 class="text-center" style="margin: 50px 0 40px 0;">Edit Event</H1>
          <center>
      <form enctype="multipart/form-data" action="{{ route('admin-edit-event') }}" method="POST">
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

          </div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <script>
      function openPage(pageName, elmnt, color) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
    
        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
    
        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";
    
        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click(); 
      </script>

      <script>
        function opendeletepage(card){
          $(('.'+card)).css('display', 'block');
        }
        function closedeletepage(card){
          $(('.'+card)).css('display', 'none');
        }
      </script>
      <script>
        function openNav() {
    document.getElementById("mobile-menu").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mobile-menu").style.width = "0";
}
      </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/81c2cd76b6.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>