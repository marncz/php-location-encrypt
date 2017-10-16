<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Meet-up location encryption</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/patternLock.css"  rel="stylesheet" type="text/css" />
    <link href="css/maps.css"  rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="css/narrow-jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="/">Encrypt </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/decrypt.php">Decrypt <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Meet-up location encryption</h3>
      </div>

      <div class="jumbotron">
        <div class="row">
          <div class="col-lg-12">
              <div id="map"></div>
              <input type="hidden" id="lat" value="<?php echo $_GET['lat'];?>">
              <input type="hidden" id="lng" value="<?php echo $_GET['lng'];?>">
          </div>
        </div>

      </div>

      <footer class="footer">
        <p>&copy; Marcin Czarnecki</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
      function initMap() {
        var uluru = {lat: parseFloat($("#lat").val()), lng: parseFloat($("#lng").val())};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK03U3WxdemZA3WwpGMAi2b05wImZzHnw&callback=initMap"></script>

  </body>
</html>
