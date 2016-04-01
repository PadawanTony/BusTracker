<?php namespace Database\commands;

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  01/04/16
 */
require __DIR__.'/../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__.'/../..');
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_DATABASE', 'DB_USER', 'DB_PASSWORD'])->notEmpty();

$databaseLocation = __DIR__.'/../../storage/ashoka_BusTracker.sql';
$dbMysqlAdminCredentials = 'mysqladmin -u'.getenv('DB_USER').' -p'.getenv('DB_PASSWORD').' ';

$dropDbCommand = $dbMysqlAdminCredentials.' -f DROP '.getenv('DB_DATABASE');
$createDbCommand = $dbMysqlAdminCredentials.' CREATE '.getenv('DB_DATABASE');

$dbMysqlCredentials = 'mysql -u'.getenv('DB_USER').' -p'.getenv('DB_PASSWORD').' ';
$importDbCommand = $dbMysqlCredentials.getenv('DB_DATABASE').' < '.$databaseLocation;

passthru($dropDbCommand);
passthru($createDbCommand);
echo "\nDatabase '".getenv('DB_DATABASE')."'' created.\n";

passthru($importDbCommand);
echo "\nImported database from $databaseLocation";

//echo exec($createDbCommand);
//echo exec($importDbCommand);
