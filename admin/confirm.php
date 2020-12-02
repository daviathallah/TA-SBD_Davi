<html>
<head>
  <title>Konfirmasi pembelian lagu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div align = "center">

 
<?php 
    include "config.php";
   // include "prosesdaftarlagu.php";
  //  include "prosescheckout.php";
    include "config.php";

    if (isset($_POST['simpancheckout'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $payment = $_POST['payment'];  
        mysqli_query($db, "INSERT INTO pembeli VALUES ('$email', '$nama', '', '')");
        mysqli_query($db, "INSERT INTO purchase VALUES ('$payment')");
    }
  
 //   mysqli_query($db, "INSERT INTO purchase SET lagu = $music");
?>



<?php include 'config.php' ?>
    <a href="../logout.php"><b>Logout</b></a>
  <h1>Konfirmasi Pembelian Lagu</h1>
  <?php

  ?>
  <p>Apakah data anda sudah benar?</p>
  <p>Nama: <?php echo "$nama"; ?></p>
  <p>Email: <?php echo "$email"; ?></p>
  <p>Metode Pembayaran: <?php echo "$payment"; ?></p>
  
 <?php 
 //include "prosesdaftarlagu.php";
 $sql = mysqli_query($db, "SELECT * FROM ordernew WHERE id_ordernew = 1");
 $arai = mysqli_fetch_row($sql);
 //if ($music == 'chouchou') {
    ?>
  

 
  <a href="final.php"><input type="button" value="Benar"></a>
  <a href="daftarlagu.php"><input type="button" value="Kembali"></a>
</div>
</body>