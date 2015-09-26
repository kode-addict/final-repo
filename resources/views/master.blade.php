<!DOCTYPE html>
<html>
<meta id="token" name="token" value="{{ csrf_token() }}">
<head>
    <title>Mae Pay Soh Web Application</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>

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
    <a href="{{ url('candidate?per_page=15') }}" class="item">Candidate</a>
    <a href="{{ url('faq') }}" class="item">Voter Education</a>
    <a href="{{ url('howto') }}" class="item">Important Facts About Voting</a>
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
    <br><br><br><br>

    <div class="ui grid column centered">
        <form action="{{ url('candidate/search') }}" method="GET">

            <div class="ui search ">
                <div class="ui left icon input">
                    <input class="prompt" name="q" type="text" placeholder="Search Candidate">
                    <i class="user icon"></i>
                </div>
                <button class="ui green button" type="submit"><i class="search icon"></i>Search</button>
            </div>
        </form>
    </div>
    <br><br>


    <div class="ui container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <div id="toast" class="hidden">
        {{ Inspiring::quote() }}
    </div>

    <br><br>

</div>
<script type="text/javascript">

    $(document).ready(function(){

        var data=$('#toast').text();

        toastr.success(data, 'မဲပေးရာတွင်သိထားသင့်သည့်အချက်များ', {timeOut: 8000});

        $('.ui.search')
        .search({
            apiSettings: {
                url: "{{ url('candidate/searchajax') }}"+'/{query}'
            },
            searchDelay:0,
            error : {
                source      : 'Cannot search. No source used, and Semantic API module was not included',
                noResults   : 'Your search returned no results',
                logging     : 'Error in debug logging, exiting.',
                noTemplate  : 'A valid template name was not specified.',
                serverError : 'Try finding other name',
                maxResults  : 'Results must be an array to use maxResults setting',
                method      : 'The method you called is not defined.'
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
