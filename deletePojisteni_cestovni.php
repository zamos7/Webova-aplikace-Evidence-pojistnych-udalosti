<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    include("connection.php");

    $sql = "UPDATE pojisteni SET pojisteni_cestovni = 0 WHERE id=$id";

    $con->query($sql);
}

header("location: Detail.php?id=$id");
die;
?>