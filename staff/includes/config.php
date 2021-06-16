<?php 
// DB credentials.
define('DB_HOST','rocky.sfdns.net');
define('DB_USER','pkppagro_master');
define('DB_PASS','pkppagro2019');
define('DB_NAME','pkppagro_web');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>