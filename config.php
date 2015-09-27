<?php
// turns error off or  on
ini_set( "display_errors", true );
// sets timezone
date_default_timezone_set( "Africa/Lagos" );  

// here we set database creditials
define( "DB_DSN", "mysql:host=localhost;dbname=database" );
define ("DB_NAME", "databasename");
define( "DB_USERNAME", "username" );
define( "DB_PASSWORD", "password" );

// path to functions
define( "CLASS_PATH", "system" );
//theme path
define( "TEMPLATE_PATH", "theme" );
define( "HOMEPAGE_NUM_NEWS", 5 );

// here we set up super admin login details
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "adminpass" );

//  here we enter our functions/classes
require( CLASS_PATH . "/library.php" );
 
function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}
 
set_exception_handler( 'handleException' );
?>
