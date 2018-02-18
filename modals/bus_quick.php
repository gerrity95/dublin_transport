<div class="modal fade" id="busModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Dublin Bus Quick Search</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Get Stop info
        <form method="get" action="dbstop.php">
        	<input type="hidden" value="getStopTimes" type="text" name="o">
          <input type="text" class="form-control" name="stop">
          <br><br>
          <input class="btn button_style" type="submit" value="Submit">

        </form>
        <br><br>
        Get Route info
        <form method="get" action="dbroute.php">
        	<input type="hidden" value="getStops" type="text" name="o">
          <input type="text" class="form-control" name="route">
          <br><br>
          <input class="btn button_style" type="submit" value="Submit">

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" style="font-family: 'Lato', sans-serif;" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
