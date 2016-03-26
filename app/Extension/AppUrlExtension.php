<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  26/03/16
 */
namespace HubIT\Extension;

use HubIT\App;
use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class AppUrlExtension implements ExtensionInterface
{
    public function register(Engine $engine)
    {
        $engine->registerFunction('url', [$this, 'url']);
    }

    public function url($asset)
    {
        return App::url($asset);
    }
}