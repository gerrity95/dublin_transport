<?php
require_once('lib/nusoap/nusoap.php');
//include 'utils.php';

class dbapi {
	static $client;

	public function init() {
		self::$client = new nusoap_client('http://rtpi.dublinbus.ie/DublinBusRTPIService.asmx?WSDL', true,'', '', '', '');
		$err = self::$client->getError();
		if ($err) {
			header("HTTP/1.1 502 Bad Gateway", true, 502);
			//header("Content-Type: application/json",true);
			die (json_encode(array('error' => "Unknown error occurred initialising API")));
		}
	}

	private function testForError($res) {
		if (isset($res['faultcode']) && isset($res['faultstring'])) {
			header("HTTP/1.1 500 Internal Server Error", true, 500);
			//header("Content-Type: application/json",true);
			//header("Content-Type: application/json",true);
			echo (json_encode(array('error' => $res['faultstring'])));
			return false;
		}
		return true;
	}

	public function getStops($route) {
		$result = self::$client->call('GetStopDataByRoute', array('route' => $route));

		if (self::testForError($result)) {
			//header("Content-Type: application/json",true);
			$ho = json_encode(array('route' => $route, 'stops' =>$result['GetStopDataByRouteResult']['diffgram']['StopDataByRoute']), JSON_PRETTY_PRINT);
      $out = json_decode($ho, true);

      echo "<h2>Inbound Route Info</h2>";
      echo "From ". $out['stops']['Route']['StartStageName']. " To ". $out['stops']['Route']['EndStageName'];
      echo "<br><br>";

			echo "<table>";
			echo "<th>";
				echo "Stop Name";
			echo "</th>";
			echo "<th>";
				echo "Stop Number";
			echo "</th>";
		      foreach( $out['stops']['InboundStop'] as $item)
		      {

						echo "<tr>";
						echo "<td>";
		        #echo $item['Location'];
						echo "<a href='index.php?o=getStopTimes&stop=" . $item['StopNumber'] . "'>" . $item['Location']. "</a>";
		        echo "</td>";
						echo "<td>";
						echo $item['StopNumber'];
						echo "</td>";
						echo "</tr>";
		      }
			echo "</table>";

      echo "<h2>Outbound Route Info</h2>";
      echo "From ". $out['stops']['Route']['EndStageName']. " To ". $out['stops']['Route']['StartStageName'];
      echo "<br><br>";

			echo "<table>";
			echo "<table>";
			echo "<th>";
				echo "Stop Name";
			echo "</th>";
			echo "<th>";
				echo "Stop Number";
			echo "</th>";
					foreach( $out['stops']['OutboundStop'] as $item)
					{
						echo "<tr>";
						echo "<td>";
						echo "<a href='index.php?o=getStopTimes&stop=" . $item['StopNumber'] . "'>" . $item['Location']. "</a>";
						echo "</td>";
						echo "<td>";
						echo $item['StopNumber'];
						echo "</td>";
						echo "</tr>";
					}
			echo "</table>";

		}
	}

	public function getStopTimes($stop) {
		$result = self::$client->call('GetRealTimeStopData', array('stopId' => $stop, 'forceRefresh' => 1));

		if (self::testForError($result)) {
			//header("Content-Type: application/json",true);
			if (isset($result['GetRealTimeStopDataResult']['diffgram']['DocumentElement'])) {
				$hi = json_encode(array('stopId' => $stop, 'departures' => $result['GetRealTimeStopDataResult']['diffgram']['DocumentElement']['StopData']), JSON_PRETTY_PRINT);
        $date =  json_decode($hi, true);
        #print_r($date);

        foreach( $date['departures'] as $item)
        {
           #print_r($item);
					 echo "<table>";
					 	echo "<tr>";
						echo "<th>Destination</th>";
						echo "<th>Bus</th>";
						echo "<th>Direction</th>";
						echo "<th>Time Due</th>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
           			echo $item['MonitoredVehicleJourney_DestinationName'];
							echo "</td>";
							echo "<td>";
					 			echo $item['MonitoredVehicleJourney_PublishedLineName'];
							echo "</td>";
							echo "<td>";
					 			echo $item['MonitoredVehicleJourney_DirectionRef'];
							echo "<td>";
					 			echo $item['MonitoredCall_ExpectedDepartureTime'];
							echo "</td>";
						echo "</tr>";
					echo "</table>";
					 echo "<br>";
        }

			} else {
				echo json_encode(array('stopId' => $stop, 'departures' => array()));
			}
		}
	}

	public function badRequest($msg) {
		header("HTTP/1.1 400 Bad Request", true, 400);
		//header("Content-Type: application/json",true);
		die (json_encode(array('error' => $msg)));
	}
}


dbapi::init();

if (!isset($_GET['o'])) {
	dbapi::badRequest("No method specified in parameter 'o'");
} else {
	switch ($_GET['o']) {
		case "getStops":
			if (!isset($_GET['route'])) {
				dbapi::badRequest("Missing parameter 'route'");
			} else {
				dbapi::getStops($_GET['route']);
			}
			break;
		case "getStopTimes":
			if (!isset($_GET['stop'])) {
				dbapi::badRequest("Missing parameter 'stop'");
			} else {
				dbapi::getStopTimes($_GET['stop']);
			}
			break;
	}
}
 ?>
