<?php namespace HubIT\Requests;

/**
 * Validate post data.
 *
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  10/03/16
 */
use HubIT\Services\CoordinatesService;
use Pux\Mux;

/**
 * Class PostCoordinatesRequest
 *
 * @package HubIT\Requests
 */
class PostCoordinatesRequest extends Mux implements Request
{
	const LOCATION = 'location';
	/**
	 * Allowed locations.
	 *
	 * @var array
	 */
	private $allowedLocations = [CoordinatesService::TO_GLIFADA, CoordinatesService::TO_KIFISIA];

	/**
	 * Validate data of current request.
	 *
	 */
	public function validate()
	{
		if ( ! isset($_POST[ self::LOCATION ]))
		{
			$response["error"] = 403;

			$response["message"] = "Missing parameter: 'location'";

			exit(json_encode($response));
		}

		if ( ! in_array($_POST[ self::LOCATION ], $this->allowedLocations, true))
		{
			$response["error"] = 403;

			$response["message"] = "Location not found";

			exit(json_encode($response));
		}

	}

	public function getLocation()
	{
		return $_POST[self::LOCATION];
	}
}