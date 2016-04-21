<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;

class CreateNewStop extends Database
{

	public function insertNewStop($thePost)
	{
		/*
		 * Following code will create a new request row
		 * All request details are read from HTTP Post Request
		 */

// array for JSON response
		$response = array();

		if ( isset($thePost['stopTime']) && isset($thePost['nameOfStopGR']) && isset($thePost['nameOfStopENG']) && isset($thePost['description']) && isset($thePost['lat']) && isset($thePost['lng']) && isset($thePost['routeID']) ) {

			$stopTime = $thePost['stopTime'];
			$nameOfStopGR = $thePost['nameOfStopGR'];
			$nameOfStopENG= $thePost['nameOfStopENG'];
			$description = $thePost['description'];
			$lat = $thePost['lat'];
			$lng = $thePost['lng'];
			$routeID = $thePost['routeID'];

// include db connect class
//it's on the top

//execute query
			try {
				$db = $this->getDbConnection();
				$result = $db->query("INSERT INTO RouteStops(routeID, stopTime, nameOfStopGR, nameOfStopENG, description, lat, lng) VALUES ('$routeID', '$stopTime', '$nameOfStopGR', '$nameOfStopENG' , '$description' , '$lat' , '$lng' ); ");
			} catch
			(Exception $ex) {
				$response["success"] = 0;
				$response["message"] = "Database Error!";
				return $response;
			}


			// check if row inserted or not
			if ($result) {  // successfully inserted into database
				$response["success"] = 1;
				$response["message"] = "Stop Successfully created.";

				// echoing JSON response
				return $response;
			} else {   // failed to insert row
				$response["success"] = 0;
				$response["message"] = "Something went wrong!";
				// echoing JSON response
				return $response;
			}
		} else {
			// required field is missing
			$response["success"] = 0;
			$response["message"] = "Required field(s) is missing!";

			// echoing JSON response
			return $response;
		}
	}
}

