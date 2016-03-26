<?php namespace HubIT\Controllers;

use HubIT\Extension\AppUrlExtension;
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
        $engine = new Engine;
        $engine->setDirectory(__DIR__.'/../Views');
        $engine->loadExtension(new AppUrlExtension);
        $this->views = $engine;
    }

}