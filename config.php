<?php
error_reporting(0);

$server 	= "localhost:3307";
$user   	= "root";
$password 	= "root";
$database	= "bd_prueba18";

$cn  = mysql_connect( $server, $user , $password );

if (!$cn ){
	die("Error connecting to server");
}

$db = mysql_select_db($database );

if (!$db )
	die("Error connecting to the database");

