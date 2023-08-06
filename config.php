<?php

// database details 
$db = [
    'db_name' => 'password_manager',
    'db_host' => 'localhost',
    'db_port' => 3306,
    'db_username' => 'root',
    'db_password' => '',
];

foreach($db as $key => $value){
    $GLOBALS[$key] = $value;
}