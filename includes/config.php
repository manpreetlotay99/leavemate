<?php

define('DB_HOST','localhost:3307');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','leave_staff');

$conn = mysqli_connect('localhost:3307','root','','leave_staff') or die(mysqli_error($conn));

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
