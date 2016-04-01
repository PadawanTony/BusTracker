<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;

class ViewRoutes extends Database
{

	public function fetchAllRoutes()
	{
		$query_routes = "SELECT * FROM Routes;";

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
			$response["routes"] = array();
			$response["message"] = "Here are All the Routes";

			foreach ($row_routes as $row) {
				$theroutes = array();
				$theroutes["ID"] = $row["ID"];
				$theroutes["nameGR"] = $row["nameGR"];
				$theroutes["nameENG"] = $row["nameENG"];
				$theroutes["school"] = $row["school"];
				array_push($response["routes"], $theroutes);
			}

			return $response;
		} else {
			// no routes found
			$response["success"] = 0;
			$response["message"] = "No Routes Found";

			return $response;
		}






// array for JSON response
		$response = array();

		if ( isset($thePost['nameENG']) && isset($thePost['nameGR']) && isset($thePost['school']) ) {

			$nameENG = $thePost['nameENG'];
			$nameGR = $thePost['nameGR'];
			$school = $thePost['school'];

// include db connect class
//it's on the top

//execute query
			try {
				$db = $this->getDbConnection();
				$result = $db->query("INSERT INTO Routes(nameENG, nameGR, school) VALUES ('$nameENG', '$nameGR', '$school' )");
			} catch
			(Exception $ex) {
				$response["success"] = 0;
				$response["message"] = "Database Error!";
				return $response;
			}


			// check if row inserted or not
			if ($result) {  // successfully inserted into database
				$response["success"] = 1;
				$response["message"] = "Route Successfully created.";

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

