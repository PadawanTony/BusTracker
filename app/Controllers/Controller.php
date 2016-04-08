<?php namespace CodeBurrow\Controllers;

use CodeBurrow\Extension\AppUrlExtension;
use League\Plates\Engine;

/**
 * @author Antony Kalogeropoulos
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