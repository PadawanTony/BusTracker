<?php namespace HubIT\Controllers;

use HubIT\Repositories\QuoteRepositories\StaticQuoteRepository;
use HubIT\Repositories\UserRepositories\StaticUserRepository;
use HubIT\Requests\PostCoordinatesRequest;
use HubIT\Services\CoordinatesService;
use HubIT\Transformers\ApiCoordinatesTransformer;

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 *
 * @since  6/14/2015
 */
class WelcomeController extends Controller
{
	/**
	 * @var StaticUserRepository
	 */
	private $userRepository;
	/**
	 * @var StaticQuoteRepository
	 */
	private $quotesRepository;
	/**
	 * @var CoordinatesService
	 */
	private $coordinatesService;
	/**
	 * @var PostCoordinatesRequest
	 */
	private $postCoordinatesRequest;
	/**
	 * @var ApiCoordinatesTransformer
	 */
	private $apiCoordinatesTransformer;

	/**
	 * WelcomeController constructor.
	 */
	public function __construct()
	{
		parent::__construct();

		$this->userRepository = new StaticUserRepository();
		$this->quotesRepository = new StaticQuoteRepository();
		$this->coordinatesService = new CoordinatesService();
		$this->postCoordinatesRequest = new PostCoordinatesRequest();
		$this->apiCoordinatesTransformer = new ApiCoordinatesTransformer();
	}

	/**
	 * Show all users
	 */
	public function index()
	{
		$title = 'Bus Tracker';

		$users = $this->userRepository->getAll();

		shuffle($users);

		$randomQuote = $this->quotesRepository->getRandom();

		return $this->views->render('welcome', compact('users', 'title', 'randomQuote', 'latlng'));
	}

	/**
	 * Async return coordinate resulsts.
	 *
	 * @return string
	 */
	public function getCoordinates()
	{
		$this->postCoordinatesRequest->validate();

		$location = $this->postCoordinatesRequest->getLocation();

		$coordinates = $this->coordinatesService->getCoordinates($location);

		return $this->apiCoordinatesTransformer->transform($coordinates);
	}
}