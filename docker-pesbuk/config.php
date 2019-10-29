<?php

$db_host = "db-aris-sp3.cf4kbdfuw9lt.us-east-2.rds.amazonaws.com";
$db_user = "aris";
$db_pass = "123suksesbos";
$db_name = "pesbuk";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
