<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  10/03/16
 */
/* Change the Time-Zone */
ini_set('date.timezone', 'Europe/Athens');


// This block of code is used to undo magic quotes.  Magic quotes are a terrible
// feature that was removed from PHP as of PHP 5.4.  However, older installations
// of PHP may still have magic quotes enabled and this code is necessary to
// prevent them from causing problems.  For more information on magic quotes:
// http://php.net/manual/en/security.magicquotes.php
if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
{
	function undo_magic_quotes_gpc(&$array)
	{
		foreach ($array as &$value)
		{
			if (is_array($value))
			{
				undo_magic_quotes_gpc($value);
			} else
			{
				$value = stripslashes($value);
			}
		}
	}

	undo_magic_quotes_gpc($_POST);
	undo_magic_quotes_gpc($_GET);
	undo_magic_quotes_gpc($_COOKIE);
}

// This tells the web browser that your content is encoded using UTF-8
// and that it should submit content back to you using UTF-8
header('Content-Type: text/html; charset=utf-8');

// This initializes a session.  Sessions are used to store information about
// a visitor from one web page visit to the next.  Unlike a cookie, the information is
// stored on the server-side and cannot be modified by the visitor.  However,
// note that in most cases sessions do still use cookies and require the visitor
// to have cookies enabled.  For more information about sessions:
// http://us.php.net/manual/en/book.session.php
session_start();

