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

	private static function getUri()
	{
		return $_SERVER['REQUEST_URI'];
	}

	public static function getUrl($url)
	{
		return self::getUri() . $url;
	}

}