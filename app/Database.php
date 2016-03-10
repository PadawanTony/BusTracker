<?php namespace HubIT;

use PDO;
use PDOException;

class Database
{
	public function getConnection()
	{
		$host = getenv('DB_HOST');
		$dbname = getenv('DB_DATABASE');
		$username = getenv('DB_USER');
		$password = getenv('DB_PASSWORD');

		// UTF-8 is a character encoding scheme that allows you to conveniently store
		// a wide varienty of special characters, like ¢ or €, in your database.
		// By passing the following $options array to the database connection code we
		// are telling the MySQL server that we want to communicate with it using UTF-8
		// See Wikipedia for more information on UTF-8:
		// http://en.wikipedia.org/wiki/UTF-8
		$options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];

		// A try/catch statement is a common method of error handling in object oriented code.
		// First, PHP executes the code within the try block.  If at any time it encounters an
		// error while executing that code, it stops immediately and jumps down to the
		// catch block.  For more detailed information on exceptions and try/catch blocks:
		// http://us2.php.net/manual/en/language.exceptions.php
		try
		{
			// This statement opens a connection to your database using the PDO library
			// PDO is designed to provide a flexible interface between PHP and many
			// different types of database servers.  For more information on PDO:
			// http://us2.php.net/manual/en/class.pdo.php
			$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
		} catch (PDOException $ex)
		{
			// If an error occurs while opening a connection to your database, it will
			// be trapped here.  The script will output an error and stop executing.
			// Note: On a production website, you should not output $ex->getMessage().
			// It may provide an attacker with helpful information about your code
			// (like your database username and password).
			die("Failed to connect to the database: " . $ex->getMessage());
		}


		// This statement configures PDO to throw an exception when it encounters
		// an error.  This allows us to use try/catch blocks to trap database errors.
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// This statement configures PDO to return database rows from your database using an associative
		// array.  This means the array will have string indexes, where the string value
		// represents the name of the column in your database.
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $db;
	}

}

