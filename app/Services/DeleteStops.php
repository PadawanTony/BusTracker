<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;

class DeleteStops extends Database
{

	public function deleteAllStops($thePost)
	{
		var_dump($thePost);
		var_dump($thePost);
		echo "asdf";

		if (isset($thePost['individual_btn'])) {
			echo "asdf";

			$theID = $thePost['individual_btn'];

			$query_routes = "SELECT * FROM RouteStops WHERE ID = $theID;";

			try {
				$db = $this->getDbConnection();
				$stmt_routes = $db->prepare($query_routes);
				$result_routes = $stmt_routes->execute();
			} catch (PDOException $ex) {
				// For testing, you could use a die and message.
				//die("Failed to run query: " . $ex->getMessage());

				//or just use this use this one to product JSON data:
				$response["success"] = 0;
				$response["message"] = "Database Error. Please Try Again!";

				return $response;
			}


			//fetching the row from the query
			$dbRoute = $stmt_routes->fetch();

			if (!empty($dbRoute)) {

				$delete_route = "DELETE FROM RouteStops WHERE ID = $theID;";

				try {
					$stmt_route = $db->prepare($delete_route);
					$result_route = $stmt_route->execute();
				} catch (PDOException $ex) {
					// For testing, you could use a die and message.
					//die("Failed to run query: " . $ex->getMessage());

					//or just use this use this one to product JSON data:
					$response["success"] = 0;
					$response["message"] = "Database Error 2. Please Try Again!";

					return $response;
				}

				if ($result_route) {
					$response["success"] = 1;
					$response["message"] = "Stop Successfully Deleted ";
				} else {
					$response["success"] = 0;
					$response["message"] = "Stop Could Not Be Deleted ";
				}

			} else {
				// no routes found
				$response["success"] = 0;
				$response["message"] = "Stop With ID $theID Was NOT Found";

				return $response;
			}

			return $response;

		} else {

			foreach ($thePost['selections'] as $routeID) {

				$query_routes = "SELECT * FROM RouteStops WHERE ID = $routeID;";

				try {
					$db = $this->getDbConnection();
					$stmt_routes = $db->prepare($query_routes);
					$result_routes = $stmt_routes->execute();
				} catch (PDOException $ex) {
					// For testing, you could use a die and message.
					//die("Failed to run query: " . $ex->getMessage());

					//or just use this use this one to product JSON data:
					$response["success"] = 0;
					$response["message"] = "Database Error. Please Try Again!";

					return $response;
				}

				//fetching all the rows from the query
				$dbRoute = $stmt_routes->fetch();

				if (!empty($dbRoute)) {

					$delete_route = "DELETE FROM RouteStops WHERE ID = $routeID;";

					try {
						$stmt_route = $db->prepare($delete_route);
						$result_route = $stmt_route->execute();
					} catch (PDOException $ex) {
						// For testing, you could use a die and message.
						//die("Failed to run query: " . $ex->getMessage());

						//or just use this use this one to product JSON data:
						$response["success"] = 0;
						$response["message"] = "Database Error 2. Please Try Again!";

						return $response;
					}

					if ($result_route) {
						$response["success"] = 1;
						$response["message"] = "Stops Successfully Deleted ";
					} else {
						$response["success"] = 0;
						$response["message"] = "Stops Could Not Be Deleted ";
					}

				} else {
					// no routes found
					$response["success"] = 0;
					$response["message"] = "Stop With ID $routeID Was NOT Found";

					return $response;
				}
			}

			return $response;
		}
	}
}

