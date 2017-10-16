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
        <?php if($_GET['error']) { ?>
          <div class="alert alert-danger">
            <strong>Wrong pattern entered </strong>- location won't be decrypted.
          </div>
          <?php } ?>
                <div class="row">

          <div class="col-lg-12">
            <form method="POST" enctype="multipart/form-data" action="forms/decrypt_handler.php">
              <h1 class="display-5">1. Upload encrypted file</h1>
              <input type="file" name="encrypted_file" id="encrypted_file">
              <br><br><h1 class="display-5">2. Enter the pattern</h1>
                <div class="row">
                <div class="col-lg-3"></div>
                <p><div id="patternContainer"></div></p>
                <input type="hidden" name="pattern" id="pattern">
              </div>
              <p><br><button class="btn btn-lg btn-success" id="decrypt" type="submit">Decrypt</button></p>
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

  </body>
</html>
