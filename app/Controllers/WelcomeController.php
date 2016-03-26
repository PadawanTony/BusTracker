<?php namespace HubIT\Controllers;

use HubIT\App;
use HubIT\Repositories\QuoteRepositories\StaticQuoteRepository;
use HubIT\Repositories\UserRepositories\StaticUserRepository;

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
     * WelcomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->userRepository = new StaticUserRepository();
        $this->quotesRepository = new StaticQuoteRepository();
    }

    /**
     * Show all users
     */
    public function index()
    {
        $title = 'Bus Tracker';

        $randomQuote = $this->quotesRepository->getRandom();

        $coordinatesUrl = App::url('api/v1/coordinates');

        return $this->views->render('welcome', compact('users', 'title', 'randomQuote', 'coordinatesUrl'));
    }


    public function error404()
    {
        return $this->views->render('error404');
    }
}