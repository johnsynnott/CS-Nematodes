<?php
    $title = "Citizen Science: Nematode Edition";
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="res/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar *
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
      /* */
    </style>

    <link href="res/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="res/css/standard.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="res/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="res/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="res/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="res/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="res/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="res/ico/favicon.png">
  </head>

  <body>

    <div class="container">
      <div class="navbar">
        <div class="navbar-inner">
          <a class="brand" href="index.php"><img src="res/img/wpi_logo.jpg" class="navbar-logo" /></a>
          <ul class="nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="learn.php">Learn More</a></li>
            <li><a href="#">Get Involved</a></li>
            <li><a href="#">View Data</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div><!-- /.navbar -->

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><?php echo $title; ?></h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla tellus in eros luctus auctor. Quisque rutrum ipsum vel rhoncus aliquam. Mauris sollicitudin eu ligula non bibendum. Vestibulum aliquam semper.</p>
        <a class="btn btn-large btn-success" href="#">Learn more &raquo;</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in nulla eu massa malesuada aliquet at eget nulla. Fusce bibendum velit augue, non vestibulum urna consectetur eu. Proin nec sagittis tellus. Aliquam fermentum orci in aliquam cursus. Suspendisse cursus enim mi. Nunc neque leo, euismod.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in nulla eu massa malesuada aliquet at eget nulla. Fusce bibendum velit augue, non vestibulum urna consectetur eu. Proin nec sagittis tellus. Aliquam fermentum orci in aliquam cursus. Suspendisse cursus enim mi. Nunc neque leo, euismod.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in nulla eu massa malesuada aliquet at eget nulla. Fusce bibendum velit augue, non vestibulum urna consectetur eu. Proin nec sagittis tellus. Aliquam fermentum orci in aliquam cursus. Suspendisse cursus enim mi. Nunc neque leo, euismod.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Nematodes and stuff 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="res/js/jquery.js"></script>
    <script src="res/js/bootstrap-transition.js"></script>
    <script src="res/js/bootstrap-alert.js"></script>
    <script src="res/js/bootstrap-modal.js"></script>
    <script src="res/js/bootstrap-dropdown.js"></script>
    <script src="res/js/bootstrap-scrollspy.js"></script>
    <script src="res/js/bootstrap-tab.js"></script>
    <script src="res/js/bootstrap-tooltip.js"></script>
    <script src="res/js/bootstrap-popover.js"></script>
    <script src="res/js/bootstrap-button.js"></script>
    <script src="res/js/bootstrap-collapse.js"></script>
    <script src="res/js/bootstrap-carousel.js"></script>
    <script src="res/js/bootstrap-typeahead.js"></script>

  </body>
</html>
