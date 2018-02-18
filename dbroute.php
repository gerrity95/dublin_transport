<html>
<head>
<?php

session_start();

include("backend/connection.php");
include("backend/dbapi.php");

 ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

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


  <div style="margin-bottom:50px;" class="jumbotron">

      <div style="" class="col-sm-12 col-md-12 col-lg-12">
  	<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
  		<center><h1>Dublin Bus</h1></center>

  </div>

  <div style="padding-top:40px;padding-bottom:40px;background:#ededed" class="row">
      <div style="padding-top:30px" class="col-sm-6 col-md-5 col-lg-5 offset-1">

        Get Stop info
        <form method="get" action="dbstop.php">
          <input type="hidden" value="getStopTimes" type="text" name="o">
          <input type="text" class="form-control" name="stop">
          <br><br>
          <input type="submit" class="btn button_style" value="Submit">

        </form>

        <br>

        <?php

          $title = $_SESSION['in'];

          if(isset($_SESSION['totalRoutes']))
          {
              $routes = $_SESSION['totalRoutes'];
          }

          echo "<h2>Inbound Route Map</h2>";
          echo $title;
          echo "<br>";
          echo "<br>";

          $current_route = $_GET['route'];

          $map = mysqli_query($conn, "SELECT * FROM bus_maps WHERE route_id='$current_route'");

          $row = mysqli_fetch_assoc($map);
          echo $row['iframe_url'];

        	echo "<br><br>";
          echo "<h2>Inbound Route Info</h2>";
          #echo "From ". $out['stops']['Route']['StartStageName']. " To ". $out['stops']['Route']['EndStageName'];
    			echo $title;
    			echo "<br><br>";

    			echo "<table style='width:100%;'>";
    			echo "<th>";
    				echo "Stop Name";
    			echo "</th>";
    			echo "<th>";
    				echo "Stop Number";
    			echo "</th>";
    		      foreach( $routes['stops']['InboundStop'] as $item)
    		      {

    						echo "<tr>";
    						echo "<td>";
    		        #echo $item['Location'];
    						echo "<a href='dbstop.php?o=getStopTimes&stop=" . $item['StopNumber'] . "'>" . $item['Location']. "</a>";
    		        echo "</td>";
    						echo "<td>";
    						echo $item['StopNumber'];
    						echo "</td>";
    						echo "</tr>";
    		      }
    			echo "</table>";

        ?>


      </div>

      <div style="border-left:1px solid #dbdfe5;padding-top:30px" class="col-sm-5 col-md-5 col-lg-5 offset-1">

        Get Route info
        <form method="get" action="dbroute.php">
        	<input type="hidden" value="getStops" type="text" name="o">
          <input type="text" class="form-control" name="route">
          <br><br>
          <input type="submit" class="btn button_style" value="Submit">

        </form>
        <br>

        <?php

        $outTitle = $_SESSION['out'];

        echo "<h2>Outbound Route Map</h2>";
        echo $outTitle;
        echo "<br>";
        echo "<br>";

        $current_route = $_GET['route'];

        $map = mysqli_query($conn, "SELECT * FROM bus_maps WHERE route_id='$current_route'");

        $row = mysqli_fetch_assoc($map);
        echo $row['iframe_url'];

        echo "<br><br>";
        echo "<h2>Outbound Route Info</h2>";
        #echo "From ". $out['stops']['Route']['EndStageName']. " To ". $out['stops']['Route']['StartStageName'];
        echo $outTitle;
        echo "<br><br>";

        echo "<table style='width:100%;'>";
        echo "<th>";
          echo "Stop Name";
        echo "</th>";
        echo "<th>";
          echo "Stop Number";
        echo "</th>";
            foreach( $routes['stops']['OutboundStop'] as $item)
            {

              echo "<tr>";
              echo "<td>";
              #echo $item['Location'];
              echo "<a href='dbindex.php?o=getStopTimes&stop=" . $item['StopNumber'] . "'>" . $item['Location']. "</a>";
              echo "</td>";
              echo "<td>";
              echo $item['StopNumber'];
              echo "</td>";
              echo "</tr>";
            }
        echo "</table>";

         ?>

      </div>

  </div>

</div>

</div>

<div class="container-fluid" style="margin-top:150px;margin-bottom:20px;">
  <?php include("content_pages/footer.php"); ?>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
