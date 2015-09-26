
<html>

 <meta id="token" name="token" value="{{ csrf_token() }}">
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
        
        <div class="ui grid column centered">
        <form action="{{ url('candidate/search') }}" method="GET">

        <div class="ui search ">
          <div class="ui left icon input">
            <input class="prompt" name="q" type="text" placeholder="Search GitHub">
            <i class="github icon"></i>
          </div>
        <button class="ui green button" type="submit">Search</button>

        </div>

        </form>

        </div>


        <div class="ui container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        


        <br><br>

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
    </body>

</html>
