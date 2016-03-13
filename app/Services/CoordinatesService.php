<?php namespace HubIT\Services;

use HubIT\Database;

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
	 * Data has been validated.
	 *
	 * @param $routeId
	 *
	 * @return string
	 */
	private function fetchCoordinates($routeId)
	{
		$query = "SELECT * FROM Coordinates WHERE routeID = {$routeId} ORDER BY theTime DESC LIMIT 1;";

		$stmt = $this->getDbConnection()->prepare($query);

		if ( ! $stmt->execute()) return false;

		$row = $stmt->fetch();

		return $row;
	}
}
