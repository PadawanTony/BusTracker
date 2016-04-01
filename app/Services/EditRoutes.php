<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;

class EditRoutes extends Database
{

	public function editAllRoutes($thePost)
	{
		if (isset($thePost['individual_btn'])) {

			$theID = $thePost['individual_btn'];
			$theNameENG = $thePost['editNameENG'];
			$theNameGR = $thePost['editNameGR'];
			$theSchool = $thePost['editSchool'];

			$query_routes = "SELECT * FROM Routes WHERE ID = $theID;";

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

				$update_route = "UPDATE Routes SET nameENG='$theNameENG', nameGR='$theNameGR', school='$theSchool' WHERE ID = '$theID';";

				var_dump($update_route);

				try {
					$stmt_route = $db->prepare($update_route);
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
					$response["message"] = "Route(s) Successfully Edited ";
				} else {
					$response["success"] = 0;
					$response["message"] = "Route(s) Could Not Be Edited ";
				}

			} else {
				// no routes found
				$response["success"] = 0;
				$response["message"] = "Route With ID $theID Was NOT Found";

				return $response;
			}

			return $response;

		} else {

			foreach ($thePost['selections'] as $routeID) {

				$query_routes = "SELECT * FROM Routes WHERE ID = $routeID;";

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

					$theNameENG = $thePost['editNameENG'][$routeID];
					$theNameGR = $thePost['editNameGR'][$routeID];
					$theSchool = $thePost['editSchool'][$routeID];

					$update_route = "UPDATE Routes SET nameENG='$theNameENG', nameGR='$theNameGR', school='$theSchool' WHERE ID = '$routeID';";

					try {
						$stmt_route = $db->prepare($update_route);
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
						$response["message"] = "Route(s) Successfully Edited ";
					} else {
						$response["success"] = 0;
						$response["message"] = "Route(s) Could Not Be Edited ";
					}

				} else {
					// no routes found
					$response["success"] = 0;
					$response["message"] = "Route With ID $routeID Was NOT Found";

					return $response;
				}
			}

			return $response;
		}

		var_dump($thePost);

	}
}

