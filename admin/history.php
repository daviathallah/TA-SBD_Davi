<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    
    <meta charset="utf-8">
    <title>History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div align = 'center'>
<a href="../logout.php"><b>Logout</b></a>    <br>
<h1>History Pembelian</h1>
<table width='50%' border=1>
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>

        </tr>
        </thead>
    <?php
    include "config.php";
        $cmd = "SELECT * FROM pembeli";
        $hasil = mysqli_query($db, $cmd);
        while ($sql = mysqli_fetch_array($hasil))   {
        $no = 0; $no++;
    ?>
    <tbody><tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $sql['nama']; ?></td>
    <td><?php echo $sql['email']; ?></td>
   
    <tr>
    <?php
    } ?>
    </tbody>    
    <p><a href="daftarlagu.php"><input type="button" value="Kembali"></a>

    </div>
</body>