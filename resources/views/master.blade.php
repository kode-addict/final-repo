<!DOCTYPE html>
<html>
    <head>
        <title>Mae Pay Soh Web Application</title>

        <meta id="token" name="token" value="{{ csrf_token() }}">

        @if(Request::is('candidate/*'))

        <meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
        <meta property="11111og:type" content="article" />
        <meta property="og:title" content="When Great Minds Don’t Think Alike" />
        <meta property="og:description"content="How much does culture influence creative thinking?" />

        <meta property="og:image" content="{{ $candidate->data->photo_url }}" />

        @endIf

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

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

        <div class="ui vertical inverted right wide sidebar labeled icon menu">
            <a href="{{ url('/') }}" class="item">Home</a>
            <a href="{{ url('party') }}" class="item">Party</a>
            <a href="{{ url('candidate') }}" class="item">Candidate</a>
            <a href="{{ url('faq') }}" class="item">Voter Education</a>
            <a href="{{ url('about') }}" class="item">About</a>
            <a href="{{ url('register') }}" class="item">Register</a>
            <a href="{{ url('login') }}" class="item">Login</a>            
        </div> <!-- SideBar END -->

        <div class="dimmed pusher">
            <header>
                <div class="ui fixed menu">
                    <div class="ui container">
                        <div class="header item">
                            <!-- <img class="logo" src="assets/images/logo.png"> -->
                            <a href="{{ url('/') }}">Mae Pay Soh</a>
                        </div>

                        <div class="right menu">
                            <a href="#" class="item" onclick="$('.ui.sidebar').sidebar('toggle');">
                                <i class="sidebar icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </header> <!-- HEADER END -->            
        
        @yield('content')

        </div>        

        <script type="text/javascript">
           
            $(document).ready(function(){

              $('.ui.search')
                .search({
                  apiSettings: {
                    url: "{{ url('candidate/searchajax') }}"+'/{query}'
                  },
                  fields: {
                    results : 'data',
                    title   : 'name',
                    image   : 'photo_url',
                    url     : 'url'

                  },
                  minCharacters : 3
                });


               });               
          
        </script>

        <script type="text/javascript">

            $('#the-lower-house').hide();
            $('#the-upper-house').hide();
            $('#the-state').hide();
            $('#back-lower').hide();
            $('#back-upper').hide();
            $('#back-state').hide();

            $('#lower').click(function(){
                $('#the-lower-house').show();            
                $('#back-lower').show();
                $('#lower').hide();
                $('#upper').hide();
                $('#state').hide();
            });

            $('#upper').click(function(){
                $('#the-upper-house').show();
                $('#back-upper').show();
                $('#lower').hide();
                $('#upper').hide();
                $('#state').hide();
            });  

            $('#state').click(function(){
                $('#the-state').show();
                $('#back-state').show();
                $('#lower').hide();
                $('#upper').hide();
                $('#state').hide();
            });  

            $('#back-lower').click(function(){
                $('#upper').show();
                $('#lower').show();
                $('#state').show();                
                $('#the-lower-house').hide();               
                $('#back-lower').hide();
            });

            $('#back-upper').click(function(){
                $('#upper').show();
                $('#lower').show();
                $('#state').show();                
                $('#the-upper-house').hide();               
                $('#back-upper').hide();
            });            
              
            $('#back-state').click(function(){
                $('#upper').show();
                $('#lower').show();
                $('#state').show();                 
                $('#the-state').hide();               
                $('#back-state').hide();
            });   

        </script>
    </body>

</html>