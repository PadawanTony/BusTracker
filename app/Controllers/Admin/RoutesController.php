<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace HubIT\Controllers\Admin;

use HubIT\Services\CreateNewRoute;

class RoutesController extends Controller
{
    private $createNewRouteService;

    public function __construct()
    {
        parent::__construct();

        $this->createNewRouteService = new CreateNewRoute();
    }

    public function create()
    {
        $message = 'Some message';

        return $this->views->render('routes/create', compact('message'));
    }

    /**
     * Create new Route
     */
    public function post()
    {
        $response = $this->createNewRouteService->insertNewRoute($_POST);

        $message = $response[ 'message' ];

        if ($response[ 'success' ]) {
            return $this->views->render('routes/create', compact('message'));
        }

        return $this->views->render('error404');
    }
}