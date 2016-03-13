<?php namespace HubIT\Services;

use HubIT\Database;

/**
 * Class CoordinatesService
 *
 * @package HubIT\Services
 */
class CoordinatesService extends Database
{
	const TO_GLIFADA = 'to_Glifada';
	const TO_KIFISIA = 'to_Kifisia';
	const TO_NOM = 'to_Nom';
	const FROM_GLIFADA = 'from_Glifada';
	const FROM_KIFISIA = 'from_Kifisia';
	const FROM_NOM = 'from_Nom';

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
				$routeId = 4;
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::TO_KIFISIA:
				$routeId = 2;
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::TO_NOM:
				$routeId = 6;
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::FROM_GLIFADA:
				$routeId = 3;
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::FROM_KIFISIA:
				$routeId = 1;
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::FROM_NOM:
				$routeId = 5;
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
