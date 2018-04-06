<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$user = 'houset1';
$password = 'fradrA3e';


$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_spring18_houset1', $user, $password);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

include('functions.php');

session_start();

?>