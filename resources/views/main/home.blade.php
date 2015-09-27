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
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

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

        .main {
          margin-top: 100px;
        }

        .gray-color {
          color: rgba(0, 0, 0, 0.4);
        }

        .push-down {
          margin-bottom: 2.5em;
        }
        .header-text {
          padding-top: 170px;
        }
        .nice-text {
          text-shadow: 0em 0em 1em #000; 
          color: #FFF !important; 
          letter-spacing: 1px; 
          font-size: 40px;
          font-family: "Open sans",Helvetica,Arial !important;  
        }
        .footer-text {
            font-family: "Open sans",Helvetica,Arial !important;
            color: #FFF !important; 
            letter-spacing: 1px; 
        }
        .slogan {
          background: url('../images/background.jpg') fixed;
          background-size: cover;
          min-height: 450px;
        }
        .hot-candidate-card {
          margin-top: 50px !important;
        }
        .hot-candidate-header {
          margin-top: 50px !important;
        }
        section.hot-candidate {
            padding-bottom: 80px !important;
          }
        .wrapper {
          margin: 80px 0 80px 0;
        }
        .footer-wide {
          margin-top: 80px !important;
          padding: 100px 0 !important;
        }
        .about-text {
          padding: 80px 0 !important;
        }
        .search-everything{
            min-height: 400px;
        } 
        .chosehouse{
            margin-top: 200px;
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
  @if(!Auth::check())

    <a href="{{ url('register') }}" class="item">Register</a>
    <a href="{{ url('login') }}" class="item">Login</a> 

    @else 
     <a href="{{ url('user/favorites') }}" class="item">Favourite List</a>  
     <a href="{{ url('logout') }}" class="item">Logout</a>        
    @endIf             
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

    <section class="slogan">
        <div class="ui center aligned text container header-text nice-text">
            <h1>
                Mae Pay Soh
            </h1>
            <p>
                An Web Application Design to Help Millions of Voters in Myanmar
            </p>

            <div class="ui main column centered grid">
                <div style="top: 50px !important; position: relative;">
                    <form action="{{ url('candidate/search') }}" method="GET">

                        <div class="ui search ">
                            <div class="ui left icon input">
                                <input class="prompt" name="q" type="text" placeholder="Search Candidate">
                                <i class="user icon"></i>
                            </div>

                            <button class="ui green button" type="submit">Search</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section> <!-- Slogan END -->

    <section class="ui vertical segment hot-candidate">
        <div class="hot-candidate-header">
            <h1 class="ui center aligned header">
                Hot Candidate
                <div class="sub header">This is Some Hot Candidate</div>
            </h1>
        </div> <!-- Candidate Header END -->
        <div class="ui three column center aligned grid hot-candidate-card container">
            <div class="ui four cards">

                @foreach($data as $d)

                <div class="card">  
                    <div class="image">
                        <img src="{{ $d->data->photo_url }}">
                    </div>

                    <div class="content">
                        <div class="header">
                            <a href="candidate/{{ $d->data->id }}">{{ $d->data->name }}</a>
                        </div>

                        <div class="meta">
                            <a href="party/{{ $d->data->party->id }}">{{ $d->data->party->party_name }}</a>
                        </div>

                        <div class="description">
                            <p>{{ $d->data->legislature }}</p>
                        </div>
                    </div>

                    <div class="extra content">

                        <span>
                            <i class="checkmark icon"></i>
                            Total Vote : {{ $d->data->likeCount }}
                        </span>

                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section> <!-- Hot Cardidate END -->

    <div class="ui center aligned vertical about-text segment">
        <div class="ui text container">
            <div class="ui header">Mae Pay Soh</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="wrapper"></div>

        <section class="search-everything">

            <div class="ui center aligned text container chosehouse">
                <div class="ui header">Choose Your House</div>
            </div><br><br>

            <div class="ui one column center aligned container grid">

                <div class="column">
                    <button class="ui huge green button" id="lower">The Lower House</button>

                    <button class="ui huge violet button" id="state">The State Region</button>

                    <button class="ui huge red button" id="upper">The Upper House</button>
                </div>
            </div>

            <div class="ui grid">

                <div class="ui one column centered grid">

                    <div class="ten wide computer column sixteen wide mobile" id="the-lower-house">

                        <div id="lowerhouse">
                            <div class="ui three column grid" id="indicator">
                                <div class="column"><h5 id="step1header" class="ui header">1.Chose State  <i class="hidden checkmark green icon"></i> </h5></div>   
                                <div class="column"><h5 id="step2header" class="ui header grey">2.Chose District <i class="hidden checkmark green icon"></i> </h5></div>    
                                <div class="column"><h5 id="step3header" class="ui header grey">3.Chose Township <i class="hidden checkmark green icon"></i> </h5></div>                
                            </div>      
                        </div>

                        <div class="ui segment ten wide computer column questionBox sixteen wide mobile">

                            <div id="step1">
                                <h3>Select Your State First</h3>
                                <div class="ui form">
                                    <div class="field">
                                        <select>
                                            <option value="">Select State</option>
                                            <option value="Kachin">Kachin</option>
                                            <option value="Kayah">Kayah</option>
                                            <option value="Kayin">Kayin</option>
                                            <option value="Chin">Chin</option>
                                            <option value="Mon">Mon</option>
                                            <option value="Rakhine">Rakhine</option>
                                            <option value="Shan">Shan</option>
                                            <option value="Yangon">Yangon</option>
                                            <option value="Mandalay">Mandalay</option>
                                            <option value="Magway">Magway</option>
                                            <option value="Naypyitaw">Naypyitaw</option>
                                            <option value="Ayeyarwady">Ayeyarwaddy</option>
                                            <option value="Rakhine">Bago</option>
                                            <option value="Sagaing">Sagaing</option>
                                        </select>
                                    </div>
                                    <button class="ui button green done">Next</button>
                                </div>
                            </div>

                            <div id="step2">
                                <h3>Select Your District</h3>
                                <div class="ui form">
                                    <div class="field">
                                        <select>
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                    <button class="ui button green back">Back</button>
                                    <button class="ui button green done">Next</button>
                                </div>

                                <div class="ui active inverted dimmer">
                                    <div class="ui text loader">Loading</div>
                                </div>
                            </div>

                            <div id="step3">

                                <h3>Select Your TownShip</h3>
                                <div class="ui form">
                                    <form action="{{ url('candidate') }}" method="GET">

                                        <div class="field">
                                            <select name="constituency_ts_pcode">
                                                <option value="">Select State</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="legislature" value="lower_house">

                                        <button class="ui button green back">Back</button>
                                        <button class="ui button green done">Search</button>

                                    </form>
                                </div>

                                <div class="ui active inverted dimmer">
                                    <div class="ui text loader">Loading</div>
                                </div>
                            </div>

                        </div><!-- end segment-->

                    </div><!-- lower house -->

                    <div class="ten wide computer column sixteen wide mobile" id="the-state">
                        <div id="state_region">
                            <div class="ui three column grid" id="indicator">
                                <div class="column"><h5 id="statestep1header" class="ui header">1.Chose State  <i class="hidden checkmark green icon"></i> </h5></div>  
                                <div class="column"><h5 id="statestep2header" class="ui header grey">2.Chose District <i class="hidden checkmark green icon"></i> </h5></div>   
                                <div class="column"><h5 id="statestep3header" class="ui header grey">3.Chose Township <i class="hidden checkmark green icon"></i> </h5></div>               
                            </div>

                        </div>

                        <div class="ui segment ten wide computer column questionBox sixteen wide mobile">
                            <div id="statestep1">
                                <h3>Select Your State First</h3>
                                <div class="ui form">
                                    <div class="field">
                                        <select>
                                            <option value="">Select State</option>
                                            <option value="Kachin">Kachin</option>
                                            <option value="Kayah">Kayah</option>
                                            <option value="Kayin">Kayin</option>
                                            <option value="Chin">Chin</option>
                                            <option value="Mon">Mon</option>
                                            <option value="Rakhine">Rakhine</option>
                                            <option value="Shan">Shan</option>
                                            <option value="Yangon">Yangon</option>
                                            <option value="Mandalay">Mandalay</option>
                                            <option value="Magway">Magway</option>
                                            <option value="Naypyitaw">Naypyitaw</option>
                                            <option value="Ayeyarwady">Ayeyarwaddy</option>
                                            <option value="Rakhine">Bago</option>
                                            <option value="Sagaing">Sagaing</option>
                                        </select>
                                    </div>
                                    <button class="ui button green done">Next</button>
                                </div>
                            </div>
                            <div id="statestep2">


                                <h3>Select Your District</h3>
                                <div class="ui form">
                                    <div class="field">
                                        <select>
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                    <button class="ui button green back">Back</button>
                                    <button class="ui button green done">Next</button>
                                </div>

                                <div class="ui active inverted dimmer">
                                    <div class="ui text loader">Loading</div>
                                </div>
                            </div>

                            <div id="statestep3">

                                <h3>Select Your TownShip</h3>
                                <div class="ui form">
                                    <form action="{{ url('candidate') }}" method="GET">

                                        <div class="field">
                                            <select name="constituency_ts_pcode">
                                                <option value="">Select State</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="legislature" value="state_region">

                                        <button class="ui button green back">Back</button>
                                        <button class="ui button green done">Search</button>

                                    </form>
                                </div>
                                <div class="ui active inverted dimmer">
                                    <div class="ui text loader">Loading</div>
                                </div>
                            </div>          
                        </div><!-- end segment-->

                    </div><!-- state region -->     

                    <div class="ten wide computer column sixteen wide mobile" id="the-upper-house">

                        <div id="upper_house">
                            <div class="ui three column grid" id="indicator">
                                <div class="column"><h5 id="upperstep1header" class="ui header">1.Chose State  <i class="hidden checkmark green icon"></i> </h5></div>  
                                <div class="column"><h5 id="upperstep2header" class="ui header grey">2.Chose Constituency <i class="hidden checkmark green icon"></i> </h5></div>   
                            </div>

                        </div>

                        <div class="ui segment ten wide computer column questionBox sixteen wide mobile">
                            <div id="upperstep1">
                                <h3>Select Your State First</h3>
                                <div class="ui form">
                                    <div class="field">
                                        <select>
                                            <option value="">Select State</option>
                                            <option value="Kachin">Kachin</option>
                                            <option value="Kayah">Kayah</option>
                                            <option value="Kayin">Kayin</option>
                                            <option value="Chin">Chin</option>
                                            <option value="Mon">Mon</option>
                                            <option value="Rakhine">Rakhine</option>
                                            <option value="Shan">Shan</option>
                                            <option value="Yangon">Yangon</option>
                                            <option value="Mandalay">Mandalay</option>
                                            <option value="Magway">Magway</option>
                                            <option value="Naypyitaw">Naypyitaw</option>
                                            <option value="Ayeyarwady">Ayeyarwady</option>
                                            <option value="Rakhine">Bago</option>
                                            <option value="Sagaing">Sagaing</option>
                                        </select>
                                    </div>
                                    <button class="ui button green done">Next</button>
                                </div>
                            </div>


                            <div id="upperstep2">

                                <h3>Select Your Constituency</h3>
                                <div class="ui form">
                                    <form action="{{ url('candidate') }}" method="GET">

                                        <div class="field">
                                            <select name="constituency_am_pcode">
                                                <option value="">Select Constituency</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="legislature" value="upper_house">

                                        <button class="ui button green back">Back</button>
                                        <button class="ui button green done">Search</button>

                                    </form>
                                </div>
                                <div class="ui active inverted dimmer">
                                    <div class="ui text loader">Loading</div>
                                </div>
                            </div>          

                        </div><!-- end segment-->

                    </div><!-- upper house region -->
                </div>

            </div>

            <div class="ui center aligned container grid">
                <button class="ui large green button" id="back-upper">Back</button>
                <button class="ui large green button" id="back-state">Back</button>
                <button class="ui large green button" id="back-lower">Back</button>         
            </div>

        </section> <!-- Search Everything END -->

        <div class="ui black inverted vertical footer-wide segment">
            <div class="ui three column container grid">
                <div class="column">
                    <div class="ui vertical text container segment">
                        <div class="ui list">
                            <a href="{{ url('faq') }}" class="item">What do you know about How to Vote?</a>
                            <a href="{{ url('candidate?per_page=15') }}" class="item">Do you know which Candidate will participate?</a>
                            <a class="{{ url('party') }}">Do you have any Favourite Party?</a>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui vertical center aligned segment">
                        <a href="#">Under Opensource License GNU / GPL</a>
                    </div>
                </div>

                <div class="column">
                    <div class="ui vertical center aligned segment footer-text">
                        <p>Mae Pay Soh Web Application</p>
                        <p>Developed By Kode Addict Team</p>
                    </div>
                </div>
            </div>
        </div> <!-- FOOTER END -->

    </div>        

    <div id="toast" class="hidden">
        {{ Inspiring::quote() }}
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