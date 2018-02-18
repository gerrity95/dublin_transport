<html>
<head>
  <?php

  //session_start();

   ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

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


  <div style="margin-bottom:40px;" class="jumbotron">

      <div  class="col-sm-12 col-md-12 col-lg-12">
  	<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
  		<center><h1>Red Line Fares</h1></center>

  </div>

  <div style="padding-top:40px;padding-bottom:40px;background:#ededed;margin-bottom:40px;" class="row">
      <div style="padding-top:30px" class="col-sm-6 col-md-4 col-lg-4 offset-2">

        <form method="get" action="red_line_fares.php">
          <input type="hidden" value="farecalc" type="text" name="action">
          <select id="luas-from" name="from"></select>
          <br><br>
          <select id="luas-to" name="to"></select>
          <br><br>
          Adult tickets:
          <select id="luas-adults" name="adults">
            <option value="0" selected>0</option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
          </select>
          <br><br>
          Childrens tickets:
          <select id="luas-children" name="children">
            <option value="0" selected>0</option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
          </select>
          <br><br>
          <input type="submit" value="Submit"></input>

          </form>
          <br>

      </div>

      <div style="border-left:1px solid #dbdfe5" class="col-sm-5 col-md-5 col-lg-5 offset-1">
        <div id="luas_path"></div>

          <?php include "backend/luas_back.php"; ?>



      </div>

  </div>

</div>

</div>

<div class="container-fluid" style="margin-bottom:20px;">
  <?php include("content_pages/footer.php"); ?>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <script>
  var get_from = "<?php echo $_GET['from']; ?>";
  var get_to = "<?php echo $_GET['to']; ?>";

  let luas_from = $('#luas-from');
  let luas_to = $('#luas-to');
  let path = $('#luas_path');

  var get_start;
  var get_dest;

  luas_from.empty();
  luas_to.empty();

  luas_from.prop('selectedIndex', 0);
  luas_to.prop('selectedIndex', 0);

  const url = 'stations.json';

  // Populate dropdown with list of stations
  $.getJSON(url, function (data) {
    $.each(data.stations, function (key, entry) {
      if(entry.line == "Red")
      {
        luas_from.append($('<option></option>').attr('value', entry.shortName).text(entry.displayName));
        luas_to.append($('<option></option>').attr('value', entry.shortName).text(entry.displayName));
        if(entry.shortName == get_from)
        {
          //luas_from.append($('<option selected="true"></option>').attr('value', entry.shortName).text(entry.displayName));
          get_start = entry.displayName;
        }
        if(entry.shortName == get_to)
        {
          get_dest = entry.displayName;
        }

      }
    })
      path.append($('<p>From ' + get_start + ' to ' + get_dest + '</p>'));
  });
  </script>
</body>
<html>
