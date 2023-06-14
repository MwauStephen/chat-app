<?php
  // store db details into variables
$db['db_user']="localhost";
$db['db_username']="root";
$db['db_pass']="root";
$db['db_name']="chatapp";

// convert the variables into constants and uppercase

foreach($db as $key => $value){
    // creating constants
    define(strtoupper($key), $value);
}

$connect=mysqli_connect(DB_USER,DB_USERNAME,DB_PASS,DB_NAME);

?>
