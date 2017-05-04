<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

        <title>SEU Jobs </title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('public/template') }}/css/bootstrap.min.css" >
        <link rel="stylesheet" href="{{ asset('public/template') }}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('public/template') }}/css/icofont.css"> 
        <link rel="stylesheet" href="{{ asset('public/template') }}/css/slidr.css">     
        <link rel="stylesheet" href="{{ asset('public/template') }}/css/main.css">  
        <link id="preset" rel="stylesheet" href="{{ asset('public/template') }}/css/presets/preset1.css">	
        <link rel="stylesheet" href="{{ asset('public/template') }}/css/responsive.css">


        <!-- font -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
              rel="stylesheet"  type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

        <!-- icons -->
        <link rel="icon" href="{{ asset('public/template') }}/images/ico/favicon.ico">	
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/template') }}/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/template') }}/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/template') }}/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('public/template') }}/images/ico/apple-touch-icon-57-precomposed.png">
        <!-- icons -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Template Developed By ThemeRegion -->
    </head>
    <body>
        <!-- header -->
        <header id="header" class="clearfix">
            <!-- navbar -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/employer_home') }}"><img class="img-responsive" src="{{ asset('public/template') }}/images/logo.png" alt="Logo"></a>
                    </div>
                    <!-- /navbar-header -->

                    <div class="navbar-left">
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ url('/employer_home') }}">Home</a></li>

                            </ul>
                        </div>
                    </div><!-- navbar-left -->

                    <!-- nav-right -->
                    <div class="nav-right">				
                        <ul class="sign-in">
                            <li><i class="fa fa-user"></i></li>
                            @if (Auth::guard('web_seller')->guest())

                            <!--Seller Login and registration Links -->

                            <li><a href="{{ url('/employer_login') }}">Employer Login</a></li>
                            <li><a href="{{ url('/employer_register') }}">Employer Registration</a></li>
                            @else
                            <li><a href="#">{{ Auth::guard('web_seller')->user()->name }}</a></li>
                            <li><a href="{{ url('/employer_logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ url('/employer_logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <a href="{{ url('/job_post') }}" class="btn">Post Your Job</a>
                            <a href="{{ url('/view_post') }}" class="btn">Response Post</a>
                            @endif
                        </ul><!-- sign-in -->					


                    </div>
                    <!-- nav-right -->
                </div><!-- container -->
            </nav><!-- navbar -->
        </header><!-- header -->






        @yield('content')







        <!-- footer -->
        <footer id="footer" class="clearfix">
            <!-- footer-top -->


            <div class="footer-bottom clearfix text-center">
                <div class="container">
                    <p>Copyright &copy; <a href="#"></a> 2017. Developed by Sharmin Jahan</p>
                </div>
            </div><!-- footer-bottom -->
        </footer><!-- footer -->

        <!--/Preset Style Chooser--> 

        <!--/End:Preset Style Chooser-->

        <!-- JS -->
        <script src="{{ asset('public/template') }}/js/jquery.min.js"></script>
        <script src="{{ asset('public/template') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('public/template') }}/js/price-range.js"></script>   
        <script src="{{ asset('public/template') }}/js/main.js"></script>
        <script src="{{ asset('public/template') }}/js/switcher.js"></script>
        <script>
                                       (function (i, s, o, g, r, a, m) {
                                           i['GoogleAnalyticsObject'] = r;
                                           i[r] = i[r] || function () {
                                               (i[r].q = i[r].q || []).push(arguments)
                                           }, i[r].l = 1 * new Date();
                                           a = s.createElement(o),
                                                   m = s.getElementsByTagName(o)[0];
                                           a.async = 1;
                                           a.src = g;
                                           m.parentNode.insertBefore(a, m)
                                       })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                                       ga('create', 'UA-73239902-1', 'auto');
                                       ga('send', 'pageview');

        </script>

    </body>
</html>