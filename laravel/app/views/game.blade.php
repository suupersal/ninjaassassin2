
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Ninja Assasing</title>

    <!-- Bootstrap core CSS -->
  {{ HTML::style('css/bootstrap.min.css'); }}
  {{ HTML::style('css/cover.css'); }}   
  {{ HTML::script('js/jquery.js'); }}





  <!-- Game scripts go here-->
    {{ HTML::script('game/scripts/jquery.touchSwipe.min.js'); }}
    {{ HTML::script('game/scripts/resources.js'); }}
     {{ HTML::script('game/scripts/menus.js'); }}
      {{ HTML::script('game/scripts/ninjas.js'); }}
       {{ HTML::script('game/scripts/Map.js'); }}
        {{ HTML::script('game/scripts/constants.js'); }}

    <!-- Custom styles for this template -->
   

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Ninja Assasin 2</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#">Play</a></li>
                

                @if(Auth::check())
   
    <li>{{ HTML::linkRoute('logout', 'Logout (' . Auth::user()->username . ')') }}</li>
@else
    <li>{{ HTML::linkRoute('login', 'Login') }}</li>
@endif
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Ninja Assasin 2</h1>
          



 

<div>
    <canvas id="game"> {{ HTML::script('game/scripts/main.js'); }}
    </canvas>        <div style="position:absolute" id="mobile"></div>
         </div>
         <audio id="audio">
    <source src="assets/espionage.ogg" type="audio/ogg">
    <source src="assets/espionage.mp3" type="audio/mpeg">
    <source src="assets/espionage.wav" type="audio/wav">
    </audio>



           <!-- game goes here-->
         
          </div>

          <div class="mastfoot">
            <!-- Footer stuff goes here-->
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    {{ HTML::script('js/bootstrap.min.js'); }}
   
  </body>
</html>
