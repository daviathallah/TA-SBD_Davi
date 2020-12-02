
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    
    <meta charset="utf-8">
    <title>Flac Story</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div align = "center">
<a href="../logout.php"><b>Logout</b></a>
<h1>Search Results</h1>

<?php
include "config.php";
$search = $_POST['search'];
$result =  mysqli_query($db, "SELECT * FROM lagu WHERE judul LIKE '%$search%'");

//if ($result->num_rows > 0){
while($row = mysqli_fetch_array($result)){
    echo $row["judul"]."  
    ".$row["id_lagu"]."  
    ".$row["tahun_rilis"]." 
    ".$row["penyanyi"]." 
    ".$row["genre"]."
    ".$row["album"]. "<br>";
}
// } else {
// 	echo "0 records";
// }

//$db->close();
?>
    <a href="daftarlagu.php"><input type="button" value="Kembali"></a>
</div>
</body>