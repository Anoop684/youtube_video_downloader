<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<link href="https://bootswatch.com/3/cerulean/bootstrap.min.css" rel="stylesheet">
<link href="./style.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <style>
  .li{
    display: inline-block;
  }
  .li .a{
    text-decoration: none;
    display: inline-block;
    color: #fff;
  }
  .li .a::after{
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #fff;
    transition: width .3s
  }
  .li .a:hover::after{
    width: 100%;
    transition: width .3s;

  }
  </style>
  </head>
  <header class="header" style="color: red;">
    <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#"><span class="fa fa-youtube fa-2x" ></span><b style="font-size:25px;" id="b"> video Downloader</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="li"><a href="https://www.youtube.com" class="a"class="a"><i class="fa fa-youtube fa-2x"></i>&nbsp;YouTube</a></li>
              </ul>
            </div>
          </div>
        </nav>
  </header>
  <body>
  <div class="container">
    <div class="row">
      <br>
    <div class="col-lg-6 col-md-6 col-xs-6 text-center col-lg-push-3 col-md-push-3 col-xs-push-3">
               <!-- notification area -->
        <?php
        if (isset($_SESSION['success'])) {
            ?>
            <!--     auto close alert-->
            <script>
                setTimeout(function () {
                    $('.alert').hide('fade');
                }, 3000);
            </script>
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </strong>
            </div>
            <?php
        }

        if (isset($_SESSION['error'])) {
            ?>
            <!--     auto close alert-->
            <script>
                setTimeout(function () {
                    $('.alert').hide('fade');
                }, 5000);
            </script>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </strong>
            </div>
            <?php
        }
        ?>
        <!-- notification area end-->
      </div>
          </div><br><br><br><br>
      <div class="row">
<div class="col-lg-5 col-md-5 col-xs-5 col-lg-push-4 col-md-push-4 col-xs-push-4">
<form class="form-horizontal" action="download_process.php" method="post">
  <fieldset>
  <legend>YouTube Video Downloader Form</legend>
  <div class="form-group">
    <label for="inputUrl" class="col-lg-2 control-label">Url</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="inputUrl" name="url" placeholder="paste the url">
    </div>
  </div>
</fieldset>
  <div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
       <button type="reset" class="btn btn-default"><i class="fa fa-close"></i>&nbsp;Cancel</button>
       <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-download"></i>&nbsp;Download</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
  <footer class="text-center ">
      Copyright &copy; by <a href="#">Anoop</a> 2019 - <?php echo date('Y'); ?>
  </footer>
</html>
