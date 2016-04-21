<?php
/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @since  26/03/16
 */
namespace CodeBurrow\Controllers\Admin;

use CodeBurrow\Services\CreateNewStop;
use CodeBurrow\Services\DeleteStops;
use CodeBurrow\Services\ViewRoutes;
use CodeBurrow\Services\DeleteRoutes;
use CodeBurrow\Services\EditRoutes;
use CodeBurrow\Services\ViewStops;

class StopsController extends Controller
{
	private $editRoutesService;
	private $createNewStopService;
	private $viewStopsService;
	private $deleteStopsService;

	public function __construct()
	{
		parent::__construct();

		$this->createNewStopService = new CreateNewStop();
		$this->viewStopsService = new ViewStops();
		$this->deleteStopsService = new DeleteStops();

		$this->editRoutesService = new EditRoutes();
	}

	public function create()
	{
		return $this->views->render('stops/create');
	}

	/**
	 * Create new Stop
	 */
	public function postCreate()
	{

		var_dump($_POST);

		$response = $this->createNewStopService->insertNewStop($_POST);

		$message = $response[ 'message' ];

		if ($response[ 'success' ]) {
			return $this->views->render('stops/create', compact('message'));
		}

		return $this->views->render('error404');
	}

	public function delete()
	{
		$response = $this->viewStopsService->fetchAllStops();

		if ($response[ 'success' ]) {
			return $this->views->render('stops/delete', compact('response'));
		}

		return $this->views->render('error404');
	}

	public function postDelete()
	{
		$successDelete = $this->deleteStopsService->deleteAllStops($_POST);

		$response = $this->viewStopsService->fetchAllStops();

		if ($successDelete[ 'success' ]) {
			return $this->views->render('stops/delete', compact('response','successDelete'));
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