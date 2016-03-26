<?php namespace HubIT\Controllers;

use HubIT\App;
use HubIT\Services\CreateNewRoute;

class AdminController extends Controller
{

	private $createNewRouteService;

	/**
	 * AdminController constructor.
	 */
	public function __construct()
	{
		parent::__construct();

		$this->createNewRouteService = new CreateNewRoute();
	}

	/**
	 * Create new Route
	 */
	public function createRoute()
	{
		$response = $this->createNewRouteService->insertNewRoute($_POST);

		$message = $response['message'];

		if ($response['success']) {
			return	$this->views->render('admin_createRoute', compact('message'));
		} else {
			return $this->views->render('error404');
		}
	}

	public function dashboard()
	{
		return $this->views->render('admin_start');
	}

}