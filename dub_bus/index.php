<html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="45">
<head>
  <style>
  table {
      margin-top: 20px;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 30%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }

  </style>
</head>
<body>

<h1>Dublin Bus</h1>

Get Stop info
<form method="get" action="index.php">
	<input type="hidden" value="getStopTimes" type="text" name="o">
  <input type="text" name="stop">
  <br><br>
  <input type="submit" value="Submit">

</form>
<br><br>
Get Route info
<form method="get" action="index.php">
	<input type="hidden" value="getStops" type="text" name="o">
  <input type="text" name="route">
  <br><br>
  <input type="submit" value="Submit">

</form>


<?php include("dbapi.php"); ?>
</body>
</html>

<!--
On link click get the location/stop number
get the contents 


-->
