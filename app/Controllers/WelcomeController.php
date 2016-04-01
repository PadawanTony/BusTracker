<?php namespace CodeBurrow\Controllers;

use CodeBurrow\App;
use CodeBurrow\Repositories\QuoteRepositories\StaticQuoteRepository;
use CodeBurrow\Repositories\UserRepositories\StaticUserRepository;
use CodeBurrow\Services\ViewRoutes;


/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 *
 * @since  6/14/2015
 */
class WelcomeController extends Controller
{

    private $viewRoutesService;

    /**
     * @var StaticUserRepository
     */
    private $userRepository;
    /**
     * @var StaticQuoteRepository
     */
    private $quotesRepository;

    /**
     * WelcomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->userRepository = new StaticUserRepository();
        $this->quotesRepository = new StaticQuoteRepository();
        $this->viewRoutesService = new ViewRoutes();

    }

    /**
     * Show all users
     */
    public function index()
    {
        $title = 'Bus Tracker';

        $randomQuote = $this->quotesRepository->getRandom();

	    $routes = $this->viewRoutesService->fetchAllRoutes();
	    $routes = $routes['routes'];

	    $coordinatesUrl = App::url('api/v1/coordinates');

        return $this->views->render('welcome', compact('users', 'title', 'randomQuote', 'coordinatesUrl', 'routes'));
    }


    public function error404()
    {
        return $this->views->render('error404');
    }
}