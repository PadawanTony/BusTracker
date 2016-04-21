<?php namespace CodeBurrow\Controllers\Admin;

class DashboardController extends Controller
{
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
                                            
    public function dashboard()
    {
        return $this->views->render('dashboard');
    }
}