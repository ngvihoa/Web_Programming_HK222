<?php

/*Common functions*/

function show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

function redirect($path){
    header("Location: ".ROOT."/".$path);
    die;
}
?>
