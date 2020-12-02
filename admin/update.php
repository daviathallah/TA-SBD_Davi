<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$id = $_POST['id']; 
	$songselect  = implode(', ', $_POST['songselect']);
	$sql = mysqli_query ($conn, "UPDATE ordernew SET data = '$songselect' WHERE id = '$id' ");
	header ('location:index.php?sukses');
}
	$tampil = $_GET['update'];
	$query_tampil = mysqli_query ($conn, "SELECT * FROM ordernew WHERE id = '$tampil' ");
 
	$edit = mysqli_fetch_row($query_tampil);

	$checked = explode(', ', $edit['data']);

 
	$query = mysqli_query($conn, "SELECT * FROM ordernew ORDER BY id DESC");

?>

<form action ="" method="post">

<p><input type="checkbox" name="song[]" value="all" /> The Chainsmokers - All We Know</p>
<p><input type="checkbox" name="song[]" value="yoru" /> YOASOBI - Yoru ni Kakeru</p>
<p><input type="checkbox" name="song[]" value="langit" /> Tulus - Langit Abu-Abu</p>
<p><input type="checkbox" name="song[]" value="thats" /> MLTR - That's Why You Go Away</p>
<p><input type="checkbox" name="song[]" value="chouchou" /> Aimer - Chouchou Musubi</p>
<input type="submit" name="submit" value="Simpan">
  
</form>
<table border="1">
<tr>
 <th>No</th>
 <th>Hobi</th>
 <th colspan="2">Action</th>
</tr>
<?php $no = 1?>
<?php while ($data = mysqli_fetch_row($query)){?>
<tr>
 <td><?php echo $no++; ?></td>
 <td><?php echo $data['ordernew'] ?></td>
 <td><a href="delete.php?delete=<?php echo $data["id"]?>">Delete</a></td>
 <td><a href="update.php?update=<?php echo $data['id']?>">Update</a></td>
</tr>
<?php } ?>
</table>
<?php
