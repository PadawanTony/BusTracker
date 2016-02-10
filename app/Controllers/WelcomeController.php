<?php namespace HubIT\Controllers;

use HubIT\Repositories\QuoteRepositories\StaticQuoteRepository;
use HubIT\Repositories\UserRepositories\StaticUserRepository;

/**
 * @author Rizart Dokollari
 * @since 6/14/2015
 */
class WelcomeController extends Controller
{
    private $userRepository;
    private $quotesRepository;

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
        $title = 'HubIT Club';

        $users = $this->userRepository->getAll();

        shuffle($users);

        $randomQuote = $this->quotesRepository->getRandom();

        return $this->views->render('welcome', compact('users', 'title', 'randomQuote'));
    }
}