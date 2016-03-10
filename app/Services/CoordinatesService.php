<?php namespace HubIT\Services;

use HubIT\Database;

/**
 * Class CoordinatesService
 *
 * @package HubIT\Services
 */
class CoordinatesService extends Database
{
	const TO_GLIFADA = 'to_glifada';
	const TO_KIFISIA = 'to_kifisia';

	/**
	 * Check, and return coordinates accordingly.
	 *
	 * @return string
	 */
	public function getCoordinates($location)
	{
		$response = '';

		switch ($location)
		{
			case self::TO_GLIFADA:
				$response = $this->getCoords_toGlifada();
				break;
			case self::TO_KIFISIA:
				$response = $this->getCoords_toKifisia();
				break;
		}

		return $response;
	}

	/**
	 * @return string
	 */
	private function getCoords_toGlifada()
	{
//load and connect to MySQL database stuff
		require("db_connect.php");

//gets bus's coordinates
		$query = "SELECT * FROM Coordinates WHERE routeID = 3 ORDER BY theTime DESC LIMIT 1;";

		try
		{
			$stmt = $this->getDbConnection()->prepare($query);
			$result = $stmt->execute();
		} catch (PDOException $ex)
		{
			// For testing, you could use a die and message.
			//die("Failed to run query: " . $ex->getMessage());

			//or just use this use this one to product JSON data:
			$response["success"] = 0;
			$response["message"] = "Database Error1. Please Try Again!";
			echo json_encode($response);

		}

//fetching all the rows from the query
		$row = $stmt->fetch();
		if ( ! empty($row))
		{
			$response["success"] = 1;
			$response["message"] = [];

			$therequest = [];
			$therequest["ID"] = $row["ID"];
			$therequest["routeID"] = $row["routeID"];
			$therequest["theDate"] = $row["theDate"];
			$therequest["theTime"] = $row["theTime"];
			$therequest["lat"] = $row["lat"];
			$therequest["lng"] = $row["lng"];

			//update our repsonse JSON data
			array_push($response["message"], $therequest);

			return $response;

		} else
		{
			// no coords found
			$response["success"] = 0;
			$response["message"] = "No coords found";

			// echo no coords JSON
			return json_encode($response);
		}
	}

	/**
	 * @return string
	 */
	private function getCoords_toKifisia()
	{
//load and connect to MySQL database stuff
		require("db_connect.php");

//gets bus's coordinates
		$query = "SELECT * FROM Coordinates WHERE routeID = 6 ORDER BY theTime DESC LIMIT 1;";

		try
		{
			$stmt = $db->prepare($query);
			$result = $stmt->execute();
		} catch (PDOException $ex)
		{
			// For testing, you could use a die and message.
			//die("Failed to run query: " . $ex->getMessage());

			//or just use this use this one to product JSON data:
			$response["success"] = 0;
			$response["message"] = "Database Error1. Please Try Again!";
			echo json_encode($response);

		}

//fetching all the rows from the query
		$row = $stmt->fetch();
		if ( ! empty($row))
		{
			$response["success"] = 1;
			$response["message"] = [];

			$therequest = [];
			$therequest["ID"] = $row["ID"];
			$therequest["routeID"] = $row["routeID"];
			$therequest["theDate"] = $row["theDate"];
			$therequest["theTime"] = $row["theTime"];
			$therequest["lat"] = $row["lat"];
			$therequest["lng"] = $row["lng"];

			//update our repsonse JSON data
			array_push($response["message"], $therequest);

			return $response;

		} else
		{
			// no coords found
			$response["success"] = 0;
			$response["message"] = "No coords found";

			// echo no coords JSON
			return json_encode($response);
		}
	}
}
