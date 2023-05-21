<?php

$dbhost = "md371.wedos.net";
$dbname = "d322614_app";
$dbuser = "w322614_app";
$dbpass = "6NGRchwN";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}