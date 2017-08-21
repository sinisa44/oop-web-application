<?php

define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','php_assignement');
define('DB_HOST','localhost');


define('ROOT_URL','index.php');



spl_autoload_register(function ($classname){
	require_once ('classes/'.$classname.".php");
});

include ("html/header.php");
//include ("html/footer.php");