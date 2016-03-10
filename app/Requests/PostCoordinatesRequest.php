<?php namespace HubIT\Requests;

/**
 * Validate post data.
 *
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  10/03/16
 */
use HubIT\Services\CoordinatesService;

/**
 * Class PostCoordinatesRequest
 *
 * @package HubIT\Requests
 */
class PostCoordinatesRequest implements Request
{
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
		if ( ! isset($_POST['action']) ||
			! in_array($_POST['action'], $this->allowedLocations, true)
		)
		{
			$response["error"] = 404;

			$response["message"] = "Not Found";

			exit(json_encode($response));
		}
	}

	public function getLocation()
	{
		return $_POST['action'];
	}
}