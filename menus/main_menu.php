<nav class="navbar navbar-expand-md navbar-dark static-top bg-dark">
      <a class="navbar-brand" href="http://localhost/dublin_transport/home.php">Website Name</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/dublin_transport/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/dublin_transport/green_line.php?action=times&station=">Green Line</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/dublin_transport/red_line.php?action=times&station=">Red Line</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://localhost/dublin_transport/dbindex.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dublin Bus
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="http://localhost/dublin_transport/dbroute.php?o=getStops&route=">Search by Route</a>
              <a class="dropdown-item" href="http://localhost/dublin_transport/dbstop.php?o=getStopTimes&stop=">Search by Stop</a>
            </div>
          </li>
        </ul>
      </div>
</nav>
