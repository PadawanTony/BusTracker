<?php
/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @since  26/03/16
 */
namespace CodeBurrow\Controllers\Admin;

use CodeBurrow\Services\CreateNewRoute;
use CodeBurrow\Services\ViewRoutes;
use CodeBurrow\Services\DeleteRoutes;
use CodeBurrow\Services\EditRoutes;

class StopsController extends Controller
{
	private $createNewRouteService;
	private $viewRoutesService;
	private $deleteRoutesService;
	private $editRoutesService;

	public function __construct()
	{
		parent::__construct();

		$this->createNewRouteService = new CreateNewRoute();
		$this->viewRoutesService = new ViewRoutes();
		$this->deleteRoutesService = new DeleteRoutes();
		$this->editRoutesService = new EditRoutes();
	}

	public function create()
	{
		return $this->views->render('stops/create');
	}

	/**
	 * Create new Route
	 */
	public function postCreate()
	{
		$response = $this->createNewRouteService->insertNewRoute($_POST);

		$message = $response[ 'message' ];

		if ($response[ 'success' ]) {
			return $this->views->render('routes/create', compact('message'));
		}

		return $this->views->render('error404');
	}

	public function delete()
	{
		$response = $this->viewRoutesService->fetchAllRoutes();

		if ($response[ 'success' ]) {
			return $this->views->render('routes/delete', compact('response'));
		}

		return $this->views->render('error404');
	}

	public function postDelete()
	{
		$successDelete = $this->deleteRoutesService->deleteAllRoutes($_POST);

		$response = $this->viewRoutesService->fetchAllRoutes();

		if ($successDelete[ 'success' ]) {
			return $this->views->render('routes/delete', compact('response','successDelete'));
		}

		return $this->views->render('../error404');

	}

	public function edit()
	{
		$response = $this->viewRoutesService->fetchAllRoutes();

		if ($response[ 'success' ]) {
			return $this->views->render('routes/edit', compact('response'));
		}

		return $this->views->render('error404');
	}

	public function postEdit()
	{
		$successEdit = $this->editRoutesService->editAllRoutes($_POST);

		$response = $this->viewRoutesService->fetchAllRoutes();

		if ($successEdit[ 'success' ]) {
			return $this->views->render('routes/edit', compact('response','successEdit'));
		}

		return $this->views->render('../error404');

	}

}