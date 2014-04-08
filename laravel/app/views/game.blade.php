
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
 





  <!-- Game scripts go here-->
    
        <script src="scripts/jquery.js"></script>
        <script src="scripts/resources.js"></script>
        <script src="scripts/menus.js"></script>
        <script src="scripts/ninjas.js"></script>
        <script src="scripts/Map.js"></script>
        <script src="scripts/constants.js"></script>
        
   
   

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
                <li><a href="#">Leaderboard</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Ninja Assasin 2</h1>
          



 

  <canvas id="game"><script type = "text/javascript" src="scripts/main.js"></script></canvas>


           <!-- game goes here-->
           Game Goes here
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
