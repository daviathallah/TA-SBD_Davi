<?php

 //  $sql = mysqli_query($db, "INSERT INTO pembeli(username, nama) VALUES $email, $nama");
    include "config.php";
   // include "prosesdaftarlagu.php";
        if (isset($_POST['simpancheckout'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $payment = $_POST['payment'];

        mysqli_query($db, "INSERT INTO pembeli VALUES ($email, $nama)");
        mysqli_query($db, "INSERT INTO purchase SET metode_bayar = $payment");
        mysqli_query($db, "INSERT INTO purchase SET lagu = $music");
        header('location:confirm.php');
}


?>