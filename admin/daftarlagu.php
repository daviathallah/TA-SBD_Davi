
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    
    <meta charset="utf-8">
    <title>Flac Story</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class = "songlist">
<div align='center'>
    <?php include 'config.php' ?>
    <a href="../logout.php"><b>Logout</b></a>    <br>
    <h1>Flac Story</h1>


    <div align='center'>



    <form action="search.php" method="post">
    Cari judul lagu <input type="text" name="search" />
    <input type ="submit">
    </form>
 



<table width='50%' border=1>
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penyanyi</th>
            <th>Album</th>
            <th>Genre</th>
            <th>Tahun Rilis</th>
            <th>Format File</th>
            <th>harga</th>

        </tr>
        </thead>

        

        <?php 
        include "config.php";
        $sql = "SELECT lagu.judul, lagu.penyanyi, lagu.album, lagu.genre, lagu.tahun_rilis, 
        ordernew.format_file, ordernew.harga
        from lagu INNER JOIN ordernew on ordernew.id_lagu = lagu.id_lagu";
        $hasil = mysqli_query($db, $sql); 
        $no = 0;
        while ($data = mysqli_fetch_array($hasil))   {
        $no++;
        
        ?> 
        <tbody>  
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['penyanyi']; ?></td>
            <td><?php echo $data['album']; ?></td>
            <td><?php echo $data['genre']; ?></td>
            <td><?php echo $data['tahun_rilis']; ?></td>
            <td><?php echo $data['format_file']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            
            </tr>
           <?php
        }
        ?>
        </tbody> 


    </table>        
    <form method = 'POST' action = "prosesdaftarlagu.php">
    <p>Pilih lagu : <br></p>
    <p><input type="radio" name="optlagu" value="chouchou">1. Aimer - Chouchou Musubi</p>
    <p><input type="radio" name="optlagu" value="thats">2. MLTR - That's Why You Go Away</p>
    <p><input type="radio" name="optlagu" value="langit">3. Tulus - Langit Abu - Abu</p>
    <p><input type="radio" name="optlagu" value="yoru">4. YOASOBI - Yoru ni Kakeru</p>
    <p><input type="radio" name="optlagu" value="allwe">5. The Chainsmokers - All we Know</p>
    

    
    <input type="submit" name="submitdaftarlagu" value="Submit"/>
    </form>
   
  </br>
</br>
</div>

</body>
</html>