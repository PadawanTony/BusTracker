<?php
namespace CodeBurrow;

/**
 * Class App
 *
 * @package CodeBurrow
 */
class App
{
    public static function url($url = null)
    {
        return "http://$_SERVER[HTTP_HOST]".getenv('BASE_DIR').$url;
    }
}