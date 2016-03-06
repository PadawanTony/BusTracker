<?php

function getCoords()
{
//load and connect to MySQL database stuff
	require("db_connect.php");

//gets bus's coordinates
	$query = "SELECT * FROM Coordinates WHERE routeID = 3 ORDER BY theTime DESC LIMIT 1;";

	try {
		$stmt = $db->prepare($query);
		$result = $stmt->execute();
	} catch (PDOException $ex) {
		// For testing, you could use a die and message.
		//die("Failed to run query: " . $ex->getMessage());

		//or just use this use this one to product JSON data:
		$response["success"] = 0;
		$response["message"] = "Database Error1. Please Try Again!";
		echo json_encode($response);

	}

//fetching all the rows from the query
	$row = $stmt->fetch();
	if (!empty($row)) {
		$response["success"] = 1;
		$response["message"] = array();

		$therequest = array();
		$therequest["ID"] = $row["ID"];
		$therequest["routeID"] = $row["routeID"];
		$therequest["theDate"] = $row["theDate"];
		$therequest["theTime"] = $row["theTime"];
		$therequest["lat"] = $row["lat"];
		$therequest["lng"] = $row["lng"];

		//update our repsonse JSON data
		array_push($response["message"], $therequest);

		return $response;

	} else {
		// no coords found
		$response["success"] = 0;
		$response["message"] = "No coords found";

		// echo no coords JSON
		return json_encode($response);
	}
}

?>