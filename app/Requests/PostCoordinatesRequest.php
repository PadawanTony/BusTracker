<?php namespace CodeBurrow\Requests;

/**
 * Validate post data.
 *
 */
use CodeBurrow\Controllers\Api\ApiController;
use CodeBurrow\Services\CoordinatesService;

/**
 * Class PostCoordinatesRequest
 *
 * @package CodeBurrow\Requests
 */
class PostCoordinatesRequest extends ApiController
{
	const LOCATION = 'location';
	/**
	 * Allowed locations.
	 *
	 * @var array
	 */
	private $allowedLocations = [CoordinatesService::GLIFADA, CoordinatesService::KIFISIA,CoordinatesService::NOM];

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