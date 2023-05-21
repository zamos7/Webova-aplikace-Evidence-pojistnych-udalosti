<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    include("connection.php");

    $sql = "DELETE FROM pojisteni WHERE id=$id";
    $con->query($sql);
}

header("location: PojistovaciAPP.php");
die;
?>