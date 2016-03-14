<?php namespace HubIT\Services;

use HubIT\Database;

/**
 * Class CoordinatesService
 *
 * @package HubIT\Services
 */
class CoordinatesService extends Database
{
	const GLIFADA = 'Glifada';
	const KIFISIA = 'Kifisia';
	const NOM = 'Nom';

	/**
	 * Check, and return coordinates accordingly.
	 *
	 * @param $location
	 *
	 * @return string
	 */
	public function getCoordinates($location)
	{
		$curTime = date('H:i:s', time());

		$response = '';

		switch ($location)
		{
			case self::GLIFADA:
				if ($curTime >= '14:00:00') {
					$routeId = 4; // to_Glifada
				} else {
					$routeId = 3; // from_Glifada
				}
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::KIFISIA:
				//($curTime >= '14:00:00') ? $routeId = 2 : $routeId = 2; //Ternary if statement
				if ($curTime >= '14:00:00') {
					$routeId = 2; // to_Kifisia
				} else {
					$routeId = 1; // from_Kifisia
				}
				$response = $this->fetchCoordinates($routeId);
				break;
			case self::NOM:
				if ($curTime >= '14:00:00') {
					$routeId = 6; // to_Nom
				} else {
					$routeId = 5; // from_Nom
				}
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
