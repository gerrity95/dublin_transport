<html>
<head>
<?php

include("backend/connection.php");

 ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="social_media/css/button_style.css">
<link rel="stylesheet" href="css/animate.css">

</head>
<body style="background:#ededed">

<?php
include("menus/main_menu.php");
 ?>

  <div style="margin-bottom:0px;" class="jumbotron">

      <div  class="col-sm-12 col-md-12 col-lg-12">
  	<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
  		<center><h1>Dublin Bus</h1></center>

  </div>

  <div style="padding-top:40px;padding-bottom:40px;background:#ededed" class="row">
      <div style="padding-top:30px" class="col-sm-6 col-md-5 col-lg-5 offset-1">

        Get Stop info
        <form method="get" action="dbstop.php">
        	<input type="hidden" value="getStopTimes" type="text" name="o">
          <input type="text" name="stop">
          <br><br>
          <input type="submit" value="Submit">

        </form>
        <br><br>
        Get Route info
        <form method="get" action="dbroute.php">
        	<input type="hidden" value="getStops" type="text" name="o">
          <input type="text" name="route">
          <br><br>
          <input type="submit" value="Submit">

        </form>
        <br>

      </div>

      <div style="border-left:1px solid #dbdfe5" class="col-sm-5 col-md-5 col-lg-5 offset-1">
        <?php include("backend/dbapi.php"); ?>
      </div>

    </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
