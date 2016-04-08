<?php namespace CodeBurrow\Controllers\Api;

use CodeBurrow\Requests\PostCoordinatesRequest;
use CodeBurrow\Services\CoordinatesService;
use CodeBurrow\Transformers\ApiCoordinatesTransformer;

/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @since  10/03/16
 */
class ApiCoordinatesController extends ApiController
{
	/**
	 * @var PostCoordinatesRequest
	 */
	private $postCoordinatesRequest;
	/**
	 * @var CoordinatesService
	 */
	private $coordinatesService;
	/**
	 * @var ApiCoordinatesTransformer
	 */
	private $apiCoordinatesTransformer;

	/**
	 * CoordinatesController constructor.
	 */
	public function __construct()
	{
		$this->coordinatesService = new CoordinatesService();
		$this->postCoordinatesRequest = new PostCoordinatesRequest();
		$this->apiCoordinatesTransformer = new ApiCoordinatesTransformer();
	}

	/**
	 * Async return coordinate results.
	 *
	 * @return string
	 */
	public function getCoordinates()
	{
		$this->postCoordinatesRequest->validate();

		$location = $this->postCoordinatesRequest->getLocation();

		$coordinates = $this->coordinatesService->getCoordinates($location);

		if ( ! $coordinates ) return $this->respondNoCoordinates();

		return $this->respondWithSuccess(
			$this->apiCoordinatesTransformer->transform($coordinates)
		);
	}
}