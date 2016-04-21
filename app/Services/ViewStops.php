<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;

class ViewStops extends Database
{

	public function fetchAllStops()
	{
		$query_routes = "SELECT * FROM RouteStops;";

		try {
			$db = $this->getDbConnection();
			$stmt_routes = $db->prepare($query_routes);
			$result_routes = $stmt_routes->execute();
		}
		catch (PDOException $ex) {
			// For testing, you could use a die and message.
			//die("Failed to run query: " . $ex->getMessage());

			//or just use this use this one to product JSON data:
			$response["success"] = 0;
			$response["message"] = "Database Error. Please Try Again!";
			echo json_encode($response);
		}

		//fetching all the rows from the query
		$row_routes = $stmt_routes ->fetchAll();

		if ( !empty($row_routes) ) {
			$response["success"] = 1;
			$response["stops"] = array();
			$response["message"] = "Here are All the Stops";

			foreach ($row_routes as $row) {
				$theroutes = array();
				$theroutes["ID"] = $row["ID"];
				$theroutes["routeID"] = $row["routeID"];
				$theroutes["stopTime"] = $row["stopTime"];
				$theroutes["nameOfStopGR"] = $row["nameOfStopGR"];
				$theroutes["nameOfStopENG"] = $row["nameOfStopENG"];
				$theroutes["description"] = $row["description"];
				$theroutes["lat"] = $row["lat"];
				$theroutes["lng"] = $row["lng"];
				array_push($response["stops"], $theroutes);
			}

			return $response;
		} else {
			// no routes found
			$response["success"] = 0;
			$response["message"] = "No Stops Found";

			return $response;
		}

	}
}

