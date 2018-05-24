<!DOCTYPE html>

<html lang="en">


  <head>
    {{ csrf_field() }}
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <title>:: Machine Learning : Rating of Cereal</title>



    <!-- style -->

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- carousel -->

    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">

    <!-- responsive -->

    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

    <!-- font-awesome -->

    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- font-awesome -->

    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/popup.css')}}" rel="stylesheet" type="text/css">

  </head>

   <body class="module-home" data-spy="scroll" data-target=".navbar">



	<!-- header -->

    	<header role="header" class="header-top" id="headere-top">



        	<div class="header-fixed-wrapper" role="header-fixed">

                <div class="container">

                    <!-- hgroup -->

                    <hgroup class="row">

                        <!-- logo -->

                        <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2">

                            <h2>

                                ML

                            </h2>

                        </div>

                        <!-- logo -->

                        <!-- nav -->

                        <nav role="navigation" class="col-xs-12 col-sm-10 col-md-10 col-lg-10 navbar navbar-default">

                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                                    <span class="sr-only">Toggle navigation</span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            <div id="navbar" class="navbar-collapse collapse">

                                <ul class="nav navbar-nav">

                                    <li ><a href="{{ url('/') }}" title="Home">Home</a></li>

                                </ul>

                            </div>

                        </nav>

                        <!-- nav -->

                    </hgroup>

                    <!-- hgroup -->

                  </div>

            </div>

            <!-- banner Text -->

                 <section class="text-center">
                        <body background="backgroundImage.png">
                                <h2>Result Of Prediction</h2>
                                <h5> The cereal rating should be arround:
                                  @foreach ($data as $dt)
                                    {{$dt[datatemp]}}
                                  @endforeach
                                  </h5>
                            </body>
                </section>



            <!-- banner Text -->



            <!-- banner image -->

        	<figure>

            	<div class="parallax-window item tp-banner-container" data-parallax="scroll" data-image-src="images/backgroundImage.png"></div>

            </figure>

            <!-- banner image -->

        </header>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jquery.min.js" type="text/javascript"></script>



	<script src="js/parallax.min.js" type="text/javascript"></script>

	<script type="text/javascript">

    	$('.parallax-window').parallax({});

    </script>

    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>

	<script src="js/owl.carousel.js" type="text/javascript"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

	<script src="js/maps.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>

	<script type="text/javascript" src="js/video.js"></script>

    <script src="js/custom.js" type="text/javascript"></script>

	<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

	<script src="js/jquery.contact.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/html5shiv.min.js" type="text/javascript"></script>



  </body>

</html>
