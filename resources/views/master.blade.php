<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


        <meta id="token" name="token" value="{{ csrf_token() }}">
        

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
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>



        <header>
            <div class="ui fixed menu">
                <div class="ui container">
                    <div class="header item">
                        <!-- <img class="logo" src="assets/images/logo.png"> -->
                        Mae Pay Soh
                    </div>
                    
                    <div class="right menu">                    
                        <a href="#" class="item">
                            <i class="sidebar icon"></i> Menu                   
                        </a>
                    </div>
                </div>
            </div>          
        </header> <!-- HEADER END -->
        <br><br><br><br>
        <div class="ui container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        
    </body>

</html>
