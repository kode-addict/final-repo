<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/compilesass.css') }}">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
        
                font-weight: 500;
                font-family: 'Lato';
            }



            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>

        <div class="ui container">

<!-- <div class="ui column grid">
  <div class="column">
    <div class="ui raised segment">
      <div class="ui red ribbon label">Overview</div>
      <span>Account Details</span>
      <p></p>
      <a class="ui blue ribbon label">Community</a> User Reviews
      <p></p>
    </div>
  </div>
</div> -->

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
