<?php 

defined('ROOTPATH') OR exit('Access Denied!');

if((empty($_SERVER['SERVER_NAME']) && php_sapi_name() == 'cli') || (!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost'))
{
	/** database config **/
	define('DBNAME', 'cvwebsite');
	define('DBHOST', 'localhost:3311');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/CVblog/public');

}else
{
	/** database config **/
	define('DBNAME', 'vcwebsite');
	define('DBHOST', 'localhost');
	define('DBUSER', 'admin');
	define('DBPASS', 'password');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "My Webiste");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);
