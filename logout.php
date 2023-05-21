<?php

session_start();

if(isset($_SESSION['uzivatel_jmeno']))
{
    unset($_SESSION['uzivatel_jmeno']);
}

header("Location: login.php");
die;