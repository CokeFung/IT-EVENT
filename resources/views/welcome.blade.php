<!doctype html>
<html lang="en">
  <head>
    <title>E-Ticket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ url('/icon/icon.ico') }}">
  </head>
  <body>
    <body>
        <div style="height: 100vh; position: relative; align-items: center; display: flex; justify-content: center; background-color: #30415D;">
            @if (Route::has('login'))
                <div class="links" style="position: absolute; right: 10px; top: 18px; color: white;">
                    @auth
                        <a href="{{ url('/home') }}" class="alink">Home</a>
                    @else
                        <a href="{{ url('/login') }}" class="alink">Login</a> |
                        <a href="{{ url('/register') }}" class="alink">Register</a>
                    @endauth
                </div>
            @endif

            <div style="text-align: center; font-size: 84px; color: white;" class="alink">
                <strong class="alink">IT  EVENT</strong>
            </div>
        </div>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src='../Javascript/main.js'></script>
    <script src="https://use.fontawesome.com/81c2cd76b6.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>