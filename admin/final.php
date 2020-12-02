<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    
    <meta charset="utf-8">
    <title>Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div class = "songlist">
<div align='center'>
    <?php include 'config.php'; //include 'prosesdaftarlagu.php' ?>
    <a href="../logout.php"><b>Logout</b></a>    <br>
    <h1>Pembelian Terverifikasi</h1>
    <p>Silahkan cek email anda untuk melanjutkan pembayaran.</p>
    
    <p><a href="daftarlagu.php"><input type="button" value="Kembali"></a>
    <a href="history.php"><input type="button" value="History pembelian"></a></p>