<!DOCTYPE html>

<html lang="en">


  <head>

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

                                <button type="button" id="predict" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                                    <span class="sr-only">Toggle navigation</span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            <div id="navbar" class="navbar-collapse collapse">

                                <ul class="nav navbar-nav">

                                    <li class="active"><a href="{{ url('/') }}" title="Home">Home</a></li>

                                    <li><a href="#section-two" title="About">About</a></li>

                                    <li><a href="#section-six" title="Prediction">Prediction</a></li>

                                    <li><a href="#section-four" title="Team">Team</a></li>

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
                                <h2>Machine Learning Prediction</h2>


                                <a  href="#section-six" class="button-header">Get Strated</a>
                            </body>
                </section>



            <!-- banner Text -->



            <!-- banner image -->

        	<figure>

            	<div class="parallax-window item tp-banner-container" data-parallax="scroll" data-image-src="images/backgroundImage.png"></div>

            </figure>

            <!-- banner image -->

        </header>

    <!-- header -->



    <!-- main -->

    	<main role="main" id=" main-wrapper">

        	     	<!-- top pan -->


                        

            <!-- section-two -->

            <section class="section-two" id="section-two">

            	

                <!-- image-content -->

                <!-- <section>

                	<div class="col-xs-12 col-sm-6 col-md-6">

                    	<article>

                        	<h2>Get Maxium benifites by working with our experts.</h2>

                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo orta felis euismod semper.Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo orta felis euismod semper.</p>

                            <ul>

                                <li>Maecenas sed diam eget risus varius </li>

                                <li>orta felis euismod semper.Maecenas sed diam </li>

                                <li>amet non magna. Morbi leo orta semper.</li>

                                <li>Maecenas sed diam eget risus</li>

                            </ul>

                        </article>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">

                        <figure class="row" style="background-image:url('http://placehold.it/1600x800')"></figure>

                    </div>

                 </section> -->

                <!-- image-content -->
                 <!-- image-content -->

                 <section>

                    <div class="col-xs-12 col-sm-6 col-md-6">

                    	<figure class="row" style="background-image:url('/images/Cereal2.jpg')"></figure>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6">

                    	<article>

                    		<h2>This website is used for predict the rating of Cereal</h2>

                            <p>A cereal is any edible components of the grain. cereals are a rich source of vitamins, minerals, carbohydrates, fats, oils, and protein. When refined by the removal of the bran and germ, the remaining endosperm is mostly carbohydrate. In some developing countries, grain in the form of rice, wheat, millet, or maize constitutes a majority of daily sustenance. In developed countries, cereal consumption is moderate and varied but still substantial. </p>

                            <p>Cereal has so many health benefit. They are source energy, High Mineral Content, Prevent Cancer, Prevent Constipation, Provide Protein, Source of Vitamins.</p>

                        </article>

                    </div>

                 </section>

                <!-- image-content -->
                

            </section>

            <!-- section-two -->

            <!-- section-six -->

            <section class="section-six" id="section-six">

            	<div class="container">

                	 <header role="title-page" class="text-center">

                        <h4>Get your predict Now !!</h4>

                    </header>

                    <!-- contact-form -->

                    <div class="contact-form">

                            <form method="post" action="{{url('/result')}}" name="cform" id="cform">
                                {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 2px">
                                        <input  name="calories" id="calories" type="text" placeholder="Calories">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 2px">
                                            <input  name="potass" id="potass" type="text" placeholder="Potass">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 5px">
                                        <input  name="carbo" id="carbo" type="text"  placeholder="Carbohidrat">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 5px">
                                            <input  name="sodium" id="sodium" type="text" placeholder="Sodium">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 5px">
                                            <input  name="fat" id="fat" type="text"  placeholder="Fat">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 5px">
                                            <input  name="protein" id="protein" type="text" placeholder="Proteins">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 5px">
                                            <input  name="fiber" id="fiber" type="text"  placeholder="Fiber">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6" style="padding-top: 5px">
                                            <input  name="vitamins" id="vitamins" type="text" placeholder="Vitamins">
                                    </div>
                                </div>

                                  <br>
                                  <br>
                                  <p style="text-align:center">Your Cereal Ratings:</p>


                                <input  name="tmpresult" class="col-md-4 col-lg-4 col-sm-4" size="12" style="align:center" type="text" id="tmpresult2">





                                <div class="clearfix"></div>

                                <input name="" type="submit" value="Predict">

                                <div id="simple-msg"></div>

                        </form>

                     </div>

            </section>

            <!-- section-six -->

            <!-- section-four -->

            <section class="section-four" id="section-four">

            	<div class="container">

                    <header role="title-page" class="text-center">

                        <h4>Our Team</h4>
                    </header>

                    <!-- Team -->

                    <div class="team-pan row">

                    	

                        <section class="col-xs-12 col-sm-6 col-md-3">

                        	<figure><img src="/images/josephine_edit.jpg" alt="" class=" img-responsive"/></figure>

                        	<header>

                            	<h5>Josephine Santika</h5>

								<h6>150708182</h6>

                            </header>

                        </section>

                        <section class="col-xs-12 col-sm-6 col-md-3">

                        	<figure><img src="/images/kevin.jpg" alt="" class=" img-responsive"/></figure>

                        	<header>

                            	<h5>Kevin Antariksa</h5>

								<h6>150708214</h6>

                            </header>

                        </section>

                        <section class="col-xs-12 col-sm-6 col-md-3">

                        	<figure><img src="/images/kak dipta_edit.jpg" alt="" class=" img-responsive"/></figure>

                        	<header>

                            	<h5>Laurentius Pradipta Yunandra</h5>

								<h6>130707557</h6>

                            </header>

                        </section>

                        <section class="col-xs-12 col-sm-6 col-md-3">

                        	<figure><img src="/images/sarah.jpg" alt="" class=" img-responsive"/></figure>

                        	<header>

                            	<h5>Sarah Novelia Dwi Raskita Tarigan</h5>

								<h6>140707920</h6>

                            </header>

                        </section>

                        

                    </div>

                    <!-- Team -->

                </div>

            </section>

            <!-- section-fore -->


        </main>

    <!-- main -->





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
  <script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
         <script type="text/javascript">
           $(document).ready(function(){
             $.ajaxSetup({
 	          headers: {
 		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   	         }
             });
             $('#cform').submit(function(e){
               e.preventDefault();

               var calories=$('#calories').val();
               var carbo=$('#carbo').val();
               var fat=$('#fat').val();
               var fiber=$('#fiber').val();
               var potass=$('#potass').val();
               var protein=$('#protein').val();
               var sodium=$('#sodium').val();
               var vitamins=$('#vitamins').val();
               /*$.get('predict',function(data){
                 $('#predictData').append(data);
                 console.log(data);
               });*/
               $.ajax({
                 type: "POST",
                 url:"https://tugasbesarcereal.herokuapp.com/predict/task",
                 data:'{"calories":'+calories+',"carbo":'+carbo+',"fat":'+fat+',"fiber":'+fiber+',"potass":'+potass+',"protein":'+protein+',"sodium":'+sodium+',"vitamins":'+vitamins+'}',
                 contentType: 'application/json; charset=utf-8',
                 dataType: "json",
                 success:function(data){
                   console.log(data);
                   var dataTemp=data['message'];
                   $('#tmpresult').append(dataTemp);
                   $('#tmpresult2').val(dataTemp);
                 }
               });
             });
           });
         </script>


  </body>

</html>
