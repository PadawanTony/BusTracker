<?php namespace HubIT\Services;

use HubIT\Database;
use PDOException;

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
	 * @param $location
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
		$query = "SELECT * FROM Coordinates WHERE routeID = 3 ORDER BY theTime DESC LIMIT 1;";

		try
		{
			$stmt = $this->getDbConnection()->prepare($query);

			$result = $stmt->execute();

		} catch (PDOException $ex)
		{
			// https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html#sec10.5.4
			$response["error"] = 503;

			$response["message"] = "Service Unavailable";

			return $response;
		}

		//fetching all the rows from the query
		$row = $stmt->fetch();

		$response["success"] = 200;

		if (empty($row))
		{
			$response["message"] = "No coordinates found.";

			return $response;
		}

		return $row;
	}

	/**
	 * @return string
	 */
	private function getCoords_toKifisia()
	{
//gets bus's coordinates
		$query = "SELECT * FROM Coordinates WHERE routeID = 6 ORDER BY theTime DESC LIMIT 1;";

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
}
