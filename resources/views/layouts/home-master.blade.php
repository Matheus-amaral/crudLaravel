<!DOCTYPE html>
<html>
    <head>
    	<meta name="_token" content="{{  csrf_token() }}" />
    	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dataTable.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <style type="text/css">
            .footer {
              bottom: 0;
              background-color: #ffd800;
              text-align: center;  
              right: 0;
              left: 0;
              border-top: 3px solid #082603;
            }

            a{
                color: #fff;
            }
            a:hover{
                color: #fff;
                text-decoration: none;
            }
        </style>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/dataTable.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <title>ProgQuest - @yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header" align="center">
                <img class="img-responsive" style="width: 25%;border:none;padding-top: 7.5px;" alt="Brand" src="{{ URL::asset('img/logo.png') }}">
            </div>
            <ul class="nav navbar-nav">
              <li><a href="#">FOR MAN</a></li>
              <li><a href="#">FOR WOMAN</a></li>
              <li><a href="#">OTHERS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="row" style="margin-top: 7.5px;border-radius:0;border:none;border-bottom: solid #000 1px;">
                        <div class="col-md-10">
                            <input type="text" style="border:none" class="form-control" placeholder="Search... ">
                        </div>
                        <div class="col-md-2" style="line-height: 2.5">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </li>
                <li><a href="#">ADMIN AREA</a></li>
            </ul>
          </div>
        </nav>

       <div class="body-content">
    		@yield('content')
       </div>

       <div class="footer" style="background-color: #000; color: #fff; padding-top: 20px">
            <div class="container">
                <div class="row" align="center" style="padding-bottom: 40px">
                    <div class="col-md-3">
                        <h3>A product of</h3>
                    </div>
                    <div class="col-md-3">
                        <h3><b>ABOUT</b></h3>
                        <br>
                          <p><a href="#">OUR MISSION</a></p>
                          <p><a href="#">ABOUT US</a></p>
                          <p><a href="#">REVIEWS</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3><b>MENU</b></h3>
                        <br>
                          <p><a href="#">FOR MAN</a></p>
                          <p><a href="#">FOR WOMAN</a></p>
                          <p><a href="#">OTHERS</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3><b>SOCIAL MEDIA</b></h3>
                        <br>
                        <div style="color: black !important; font-size: 20px">
                            <div>
                                <div >
                                    <i style="background-color: #fff; border-radius: 50%; padding:5px; width: 12%;" class="fa fa-facebook"></i>
                                    <i style="background-color: #fff; border-radius: 50%; padding:5px; width: 12%;" class="fa fa-twitter"></i>
                                    <i style="background-color: #fff; border-radius: 50%; padding:5px; width: 12%;" class="fa fa-youtube"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row" style="padding-bottom: 20px;">
                    <div class="col-md-6" align="left">
                        support@test.com
                    </div>
                    <div class="col-md-6" align="right">
                        2018 Matheus
                    </div>
                </div>
            </div>
        </div>   
</html>