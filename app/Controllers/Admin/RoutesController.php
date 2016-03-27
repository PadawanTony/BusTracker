<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace HubIT\Controllers\Admin;

use HubIT\Services\CreateNewRoute;
use HubIT\Services\ViewRoutes;
use HubIT\Services\DeleteRoutes;

class RoutesController extends Controller
{
    private $createNewRouteService;
    private $viewRoutesService;
    private $deleteRoutesService;

    public function __construct()
    {
        parent::__construct();

        $this->createNewRouteService = new CreateNewRoute();
        $this->viewRoutesService = new ViewRoutes();
        $this->deleteRoutesService = new DeleteRoutes();
    }

    public function create()
    {
        return $this->views->render('routes/create');
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

}