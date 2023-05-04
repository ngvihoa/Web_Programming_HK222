<?php
session_start();

require('../app/core/init.php');

if(DEBUG){
    ini_set('display_errors', 1);
}
else{
    ini_set('display_errors', 0);
}

$a = new App;
$a->loadController();