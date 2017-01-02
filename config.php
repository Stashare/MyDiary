<?php

ini_set( "log_errors", true );
ini_set( "error_reporting", E_ALL );
ini_set( "error_log", "localhost/task-tango/error_log" );

date_default_timezone_set( "Africa/Nairobi" );  // http://www.php.net/manual/en/timezones.php
define( "APP_URL", "./" );
define( "DB_DSN", "mysql:host=localhost;dbname=task_tango" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "PASSWORD_EMAIL_FROM_NAME", "Task Tango" );
define( "PASSWORD_EMAIL_FROM_ADDRESS", "wainainaken@gmail.com" );
define( "PASSWORD_EMAIL_SUBJECT", "Your New Task Tango Password" );
define( "PASSWORD_EMAIL_APP_URL", "http://localhost/task-tango/" );
require( CLASS_PATH . "/User.php" );
require( CLASS_PATH . "/Todo.php" );
?>
