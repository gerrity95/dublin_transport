<html>
<head>
  <?php

  session_start();


   ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="45">

<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="social_media/css/button_style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/chosen.css">


</head>
<body style="background:#ededed">

<?php

include("menus/main_menu.php");
 ?>

  <?php $safe_url = rawurlencode("action=times&station"); ?>
  <?php $url = "action=times&station"; ?>

  <div style="margin-bottom:0px;" class="jumbotron">

      <div  class="col-sm-12 col-md-12 col-lg-12">
  	<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
  		<center><h1>Red Line</h1></center>
    </div>
  </div>

  <div style="padding-top:40px;padding-bottom:40px;background:#ededed" class="row">
      <div style="padding-top:30px" class="col-sm-6 col-md-4 col-lg-4 offset-2">




        <form method="get" action="red_line.php">
        	<input type="hidden" value="times" type="text" name="action">
          <select data-placeholder="Location" onchange="this.form.submit()" class="form-control" id="luas-dropdown" name="station"></select>
          </form>

          <br>

          <?php
            echo "<h4 style='color:red'>";
            echo $_SESSION['message'];
            echo "</h4>";
           ?>

      </div>

      <div style="border-left:1px solid #dbdfe5" class="col-sm-5 col-md-5 col-lg-5 offset-1">
      <h2><div id="stop-name"> </div></h2>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--<script src="js/chosen.jquery.js" type="text/javascript"></script>
        <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
        <script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script>
        var stat = "<?php echo $_GET['station']; ?>";

        let dropdown = $('#luas-dropdown');
        let stop = $('#stop-name');

        dropdown.empty();

        dropdown.prop('selectedIndex', 0);

        dropdown.append($('<option value="" disabled selected>Location</option>'))


        const url = 'stations.json';

        // Populate dropdown with list of stations
        $.getJSON(url, function (data) {
          $.each(data.stations, function (key, entry) {
            if(entry.line == "Red")
            {
              dropdown.append($('<option></option>').attr('value', entry.shortName).text(entry.displayName));
              if(entry.shortName == stat)
              {
                //dropdown.val($('<option selected="true"></option>').attr('value', entry.shortName).text(entry.displayName));
                stop.append($('<p>Stop: ' + entry.displayName + '</p>'));
              }
            }
          })
        });


        </script>
        <?php

          include "backend/luas_back.php";
         ?>
      </div>

  </div>

</div>


  <div class="container-fluid" style="margin-bottom:20px;">
    <?php include("content_pages/footer.php"); ?>
  </div>
<body>

</body>
<html>
