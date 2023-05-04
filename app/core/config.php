<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
    /** database config */
    define('DBNAME', 'my_db'); // change database name
    define('DBHOST', 'localhost:3309'); // change port
    define('DBUSER', 'root');
    define('DBPASS', '');

    define('ROOT', 'http://localhost/mvc/public');
}
else{
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    define('ROOT', 'http://www.yourwebsite.com');
}

define('APP_NAME', "My Website");
define('APP_DESC', "Best Website I've ever had");

/*true means show errors*/
define('DEBUG', true);


?>