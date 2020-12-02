<?php
include_once "config.php";
    $id = $_GET["delete"];
    $result = mysqli_query($db, "DELETE FROM pembeli WHERE id = '$id'");
    header("daftarlagu.php");   
}
?>