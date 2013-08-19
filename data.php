<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="res/css/bootstrap.css" rel="stylesheet">
    <link href="res/css/table-theme.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="res/js/html5shiv.js"></script>
    <![endif]-->

    <link href="res/css/standard.css" rel="stylesheet">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="res/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="res/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="res/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="res/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="res/ico/favicon.png">

    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="res/js/gmaps.js"></script>
    <script type="text/javascript" src="res/js/jquery.tablesorter.js"></script> 

    <script type="text/javascript">
      var map;
      $(document).ready(function(){

        $("#DataTable").tablesorter();

        map = new GMaps({
          div: '#map',
          lat: 42.275642,
          lng: -71.804731,
          zoom: 9
        });



        map.addMarker({
          lat: 42.275642,
          lng: -71.804731,
          title: 'Worcester',
          infoWindow: {
            content: '<p><a href="#worcester">Worcester Binding</a></p>'
          }
        });

        map.addMarker({
          lat: 42.644314,
          lng: -72.185669,
          title: 'Athol',
          infoWindow: {
            content: '<p><a href="#athol">Athol Binding</a></p>'
          }
        });

        map.addMarker({
          lat: 42.104845,
          lng: -71.633606,
          title: 'Blackstone',
          infoWindow: {
            content: '<p><a href="#blackstone">Blackstone Binding</a></p>'
          }
        });

        map.addMarker({
          lat: 42.510577,
          lng: -71.593180,
          title: 'Harvard',
          infoWindow: {
            content: '<p><a href="#harvard">Harvard Binding</a></p>'
          }
        });

        map.addMarker({
          lat: 42.216631,
          lng: -72.192278,
          title: 'Warren',
          infoWindow: {
            content: '<p><a href="#warren">Warren Binding</a></p>'
          }
        });
      });
    </script>

  </head>

  <body>

    <div class="container">
      <div class="navbar">
        <div class="navbar-inner">
          <a class="brand" href="index.php"><img src="res/img/wpi_logo.jpg" class="navbar-logo" /></a>
          <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="learn.php">Learn More</a></li>
            <li><a href="#">Get Involved</a></li>
            <li class="active"><a href="#">View Data</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div><!-- /.navbar -->
      <!-- Example row of columns -->
      <div class="row">
        <div class="span12">
          <!--<h2>Sample Map</h2>-->
          <div id="map">
            <noscript>You will need to enable JavaScript to view the map.</noscript>
          </div>
        </div>
        <div class="span12">
          <table id="DataTable" class="tablesorter">
            <thead>
              <tr>
                <th>Sampled By</th>
                <th>Location</th>
                <th>City</th>
                <th>State</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Elevation (m)</th>
                <th>Date</th>
                <th>Time</th>
                <th>Weather</th>
                <th>Temperature (F)</th>
                <th>Samples Collected</th>
                <th>Nematodes Found</th>
              </tr>
            </thead>
            <tbody>
              <tr id="worcester">
                <td>Laura Aurilio</td>
                <td>Institute Park</td>
                <td>Worcester</td>
                <td>MA</td>
                <td>42.275642</td>
                <td>-71.804731</td>
                <td>157</td>
                <td>2013-04-23</td>
                <td>1:02 PM</td>
                <td>Drizzling</td>
                <td>39</td>
                <td>4</td>
                <td>Yes</td>
              </tr>
              <tr id="athol">
                <td>Laura Aurilio</td>
                <td>Bearsden Conservation Park</td>
                <td>Athol</td>
                <td>MA</td>
                <td>42.612233</td>
                <td>-72.185669</td>
                <td>305</td>
                <td>2013-04-12</td>
                <td>4:05 PM</td>
                <td>Sunny</td>
                <td>45</td>
                <td>4</td>
                <td>Yes</td>
              </tr>
              <tr id="blackstone">
                <td>Laura Aurilio</td>
                <td>Blackstone Gorge</td>
                <td>Blackstone</td>
                <td>MA</td>
                <td>42.104845</td>
                <td>-71.633606</td>
                <td>67</td>
                <td>2013-04-22</td>
                <td>1:30 PM</td>
                <td>Sunny</td>
                <td>52</td>
                <td>4</td>
                <td>Yes</td>
              </tr>
              <tr id="harvard">
                <td>Laura Aurilio</td>
                <td>Ryan Land Fields</td>
                <td>Harvard</td>
                <td>MA</td>
                <td>42.510577</td>
                <td>-71.593180</td>
                <td>102</td>
                <td>2013-05-08</td>
                <td>1:43 PM</td>
                <td>Humid, Cloudy</td>
                <td>63</td>
                <td>4</td>
                <td>Yes</td>
              </tr>
              <tr id="warren">
                <td>Laura Aurilio</td>
                <td>Lucy Stone Park</td>
                <td>Warren</td>
                <td>MA</td>
                <td>42.216631</td>
                <td>-72.192278</td>
                <td>190</td>
                <td>2013-05-10</td>
                <td>2:01 PM</td>
                <td>Humid, Sunny</td>
                <td>72</td>
                <td>4</td>
                <td>Yes</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Nematodes and stuff 2013</p>
        <div 
      </div>

    </div> <!-- /container -->
  </body>
</html>