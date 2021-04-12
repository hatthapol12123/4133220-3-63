<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$host = "sql311.byethost33.com";
$user = "b33_28370941";
$pass = "hatthapol020942";
$db = "b33_28370941_member";
try{
$conn = new mysqli($host,$user,$pass,$db);
}
catch (Exception $e){
    echo$e->getMessage();
}

?>