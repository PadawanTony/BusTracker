<?php namespace HubIT\Requests;

/**
 * Validate post data.
 *
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  10/03/16
 */
use HubIT\Controllers\Api\ApiController;
use HubIT\Services\CoordinatesService;

/**
 * Class PostCoordinatesRequest
 *
 * @package HubIT\Requests
 */
class PostCoordinatesRequest extends ApiController
{
	const LOCATION = 'location';
	/**
	 * Allowed locations.
	 *
	 * @var array
	 */
	private $allowedLocations = [CoordinatesService::TO_GLIFADA, CoordinatesService::TO_KIFISIA,CoordinatesService::TO_NOM,CoordinatesService::FROM_GLIFADA,CoordinatesService::FROM_KIFISIA,CoordinatesService::FROM_NOM];

	/**
	 * Validate data of current request.
	 */
	public function validate()
	{
		if ( ! isset($_POST[ self::LOCATION ]))
		{
			return $this->respondUnprocessableEntity("Missing parameter: 'location'");
		}

		if ( ! in_array($_POST[ self::LOCATION ], $this->allowedLocations, true))
		{
			return $this->respondUnprocessableEntity("Location not found");
		}

		return true;
	}

	public function getLocation()
	{
		return $_POST[ self::LOCATION ];
	}
}