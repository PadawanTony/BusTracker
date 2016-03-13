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
	/**
	 *
	 */
	const TO_GLIFADA = 'to_glifada';
	/**
	 *
	 */
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
				$routeId = 3; // Glifada
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::TO_KIFISIA:
				$routeId = 6; // Kifisa
				$response = $this->fetchCoordinates($routeId);
				break;
		}

		return $response;
	}

	/**
	 * @param $routeId
	 *
	 * @return string
	 */
	private function fetchCoordinates($routeId)
	{
		$query = "SELECT * FROM Coordinates WHERE routeID = {$routeId} ORDER BY theTime DESC LIMIT 1;";

		try
		{
			$stmt = $this->getDbConnection()->prepare($query);

			$stmt->execute();

		} catch (PDOException $ex)
		{
			// https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html#sec10.5.4
			$response["error"] = 503;

			$response["message"] = "Service Unavailable";

			return $response;
		}

		$row = $stmt->fetch();

		if (empty($row))
		{
			$response["message"] = "No coordinates found.";

			return $response;
		}

		return $row;
	}
}
