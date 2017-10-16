<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
              <a class="nav-link active" href="/">Encrypt <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/decrypt.php">Decrypt</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Meet-up location encryption</h3>
      </div>

      <div class="jumbotron">
        <div class="row">
          <div class="col-lg-12">
            <form method="POST" action="forms/encrypt_handler.php">
              <h1 class="display-5">1. Choose location</h1>
              <p><div id="map"></div></p>
              <input type="hidden" name="marker" id="marker">
              <h1 class="display-5">2. Select a pattern</h1>
                <div class="row">
                <div class="col-lg-3"></div>
                <p><div id="patternContainer"></div></p>
                <input type="hidden" name="pattern" id="pattern">
              </div>
              <br><p><button class="btn btn-lg btn-success" id="encrypt" disabled>Encrypt</button></p>
            </form>
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
    <script src="js/patternLock.js"></script>
    <script src="js/helpers.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK03U3WxdemZA3WwpGMAi2b05wImZzHnw&callback=initMap"></script>

  </body>
</html>
