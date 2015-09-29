<?php

include('Classes/class_lib.php');

// here we set database creditials
$db = new database_credentials;

$db->host = 'localhost';
$db->uname = 'db username';
$db->pass = 'password';
$db->db_name = 'database name';


//retrieve database credentials
$DB_HOST = $db->host;
$DB_USERNAME = $db->uname;
$DB_PASSWORD = $db->pass;
$DB_DATABASE = $db->db_name;

//database connection
$connection = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD);

//check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
