<html>
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
  		<center><h1 style="" class="">Dublin Transport</h1></center>
  </div>



  <div style="padding-top:40px;padding-bottom:40px;background:#ededed" class="row">
      <div style="" class="col-sm-6 col-md-4 col-lg-4 offset-3">
        <h2  style="font-family: 'Lato', sans-serif;">Luas</h2>
        <br>
        <a href="http://localhost/dublin_transport/green_line.php?action=times&station=">Green Line</a>
        <br><br>
        <a href="http://localhost/dublin_transport/red_line.php?action=times&station=">Red Line</a>

     <br>


      </div>
      <div style="border-left:1px solid #dbdfe5" class="col-sm-6 col-md-4 col-lg-4">
          <h2 style="font-family: 'Lato', sans-serif;">Dublin Bus</h2>
          <br>
          <a href="http://localhost/dublin_transport/dbindex.php">Route & Stop Info</a>
           <br>
      </div>

  </div>

  </div>

</div>

<div class="container-fluid" style="margin-bottom:20px;">
  <?php include("content_pages/footer.php"); ?>
</div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
