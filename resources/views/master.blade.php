
<html>

 <meta id="token" name="token" value="{{ csrf_token() }}">
    <head>
        <title>Laravel</title>
        
        @if(Request::is('candidate/*'))
    
        <meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
        <meta property="og:type" content="article" />
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
