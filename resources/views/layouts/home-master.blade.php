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
            h1{
                font-family: verdana;
            }
            h3{
                font-weight: 400;
            }
            body{
            }
            .carousel {
                margin-bottom: 0;
                padding: 0 40px 30px 40px;
            }
            /* The controlsy */
            .carousel-control {
                left: -12px;
                height: 40px;
                width: 40px;
                background: none repeat scroll 0 0 #222222;
                border: 4px solid #FFFFFF;
                border-radius: 23px 23px 23px 23px;
                margin-top: 90px;
            }
            .carousel-control.right {
                right: -12px;
            }
            /* The indicators */
            .carousel-indicators {
                right: 50%;
                top: auto;
                bottom: -10px;
                margin-right: -19px;
            }
            /* The colour of the indicators */
            .carousel-indicators li {
                background: #cecece;
            }
            .carousel-indicators .active {
            background: #000;
            }
        </style>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/dataTable.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#Carousel').carousel({
                    interval: 5000
                })
            });
        </script>
        <title>Products Homepage</title>
    </head>
    <body>
        
        <nav class="navbar navbar-default" style="margin: 0;
      font-weight: 300;">
            <div align="center" style="background-color: #000; color: #fff; font-weight: 400">FREE SHIPING</div>
          <div class="container">
            <div class="navbar-header" align="left">
                <a href="/"><img class="img-responsive" width="100" style="line-height: 2;border:none;padding-top: 7.5px;" alt="Brand" src="{{ URL::asset('img/logo.png') }}"></a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="#" style="line-height: 2.3">FOR MAN</a></li>
              <li><a href="#" style="line-height: 2.3">FOR WOMAN</a></li>
              <li><a href="#" style="line-height: 2.3">OTHERS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" align="center">
                <li>
                    <div class="row" style="margin-top: 7.5px;border-radius:0;border:none;border-bottom: solid #000 1px;    padding-top: 7px;padding-right: 7.5px;">
                        <div class="col-md-10">
                            <input type="text" style="padding:0;border:none;background-color: #fbfbfb; box-shadow: none;" class="form-control" placeholder="Search... ">
                        </div>
                        <div class="col-md-2" style="line-height: 2.5;">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </li>
                <li><a href="#" style="line-height: 2.3;padding-left: 30px;"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                <li><a href="/login" style="line-height: 2.3">ADMIN AREA</a></li>
            </ul>
          </div>
        </nav>     

       <div class="body-content">
    		@yield('content')
       </div>

       <div class="footer" style="background-color: #000; color: #fff; padding-top: 20px;
      font-weight: 300;">
            <div class="container">
                <div class="row" align="center" style="padding-bottom: 40px; font-weight: 200 !important; ">
                    <div class="col-md-3" align="left">
                        <h3 style="font-weight: 200 !important;">A product of</h3>
                        <img class="img-responsive" width="100" style="line-height: 2;border:none;padding-top: 7.5px;" alt="Brand" src="{{ URL::asset('img/logo-black.png') }}">
                        <h3 style="font-weight: 200 !important;">collection</h3>
                    </div>
                    <div class="col-md-3">
                        <h3>ABOUT</h3>
                        <br>
                          <p><a href="#" style="color: #fff !important">OUR MISSION</a></p>
                          <p><a href="#" style="color: #fff !important">ABOUT US</a></p>
                          <p><a href="#" style="color: #fff !important">REVIEWS</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3>MENU</h3>
                        <br>
                          <p><a href="#" style="color: #fff !important">FOR MAN</a></p>
                          <p><a href="#" style="color: #fff !important">FOR WOMAN</a></p>
                          <p><a href="#" style="color: #fff !important">OTHERS</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3>SOCIAL MEDIA</h3>
                        <br>
                        <div style="color: black !important; font-size: 20px">
                            <div>
                                <div >
                                    <i style="background-color: #fff; border-radius: 50%; padding:5px; width: 30px;" class="fa fa-facebook"></i>
                                    <i style="background-color: #fff; border-radius: 50%; padding:5px; width: 30px;" class="fa fa-twitter"></i>
                                    <i style="background-color: #fff; border-radius: 50%; padding:5px; width: 30px;" class="fa fa-youtube"></i>
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