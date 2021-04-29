<?php
//start session
session_start();
//Create database connection using previously created constants
require_once "constants.html";
//Create the database connection
$link = new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);
//Verify the Connection
if($link->connect_error)
{
     die("Connection Failed: ". $link->connect_error);
}
?>