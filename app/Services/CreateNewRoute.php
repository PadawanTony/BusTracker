<?php namespace CodeBurrow\Services;

use CodeBurrow\Database;

class CreateNewRoute extends Database
{

	public function insertNewRoute($thePost)
	{
		/*
		 * Following code will create a new request row
		 * All request details are read from HTTP Post Request
		 */

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

