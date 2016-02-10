<?php namespace HubIT\Controllers;

use League\Plates\Engine;

/**
 * @author Rizart Dokollari
 * @since 6/14/2015
 */
class Controller
{
    protected $views;

    public function __construct()
    {
        $this->views = new Engine(__DIR__ . '/../Views');
    }

}