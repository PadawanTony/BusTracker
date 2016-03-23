<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  10/03/16
 */
namespace HubIT;

/**
 * Class App
 *
 * @package HubIT
 */
class App
{
    public static function url($url = null)
    {
        return "http://$_SERVER[HTTP_HOST]".getenv('BASE_DIR').$url;
    }
}