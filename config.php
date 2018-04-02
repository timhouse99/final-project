<?php 

$user = 'houset1';
$password = 'fradrA3e';


$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_spring18_houset1', $user, $password);

include('functions.php');

session_start();

?>