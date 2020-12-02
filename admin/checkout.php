<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div align = "center">

 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

    <?php 
    include 'config.php';
 //   include 'prosesdaftarlagu.php'; ?>

    <a href="../logout.php"><b>Logout</b></a>
  <h1>Checkout</h1>
  <form method="post" action="confirm.php">
    <table cellpadding="8">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Metode Pembayaran</td>
        <td><select name="payment">
        <option value="tfbank">Transfer Bank XYZ</option>
        <option value="gopay">gopay</option>
        <option value="ovo">OVO</option>
        <option value="pulsa">Potong Pulsa</option>
        <option value="indomaret">Indomaret</option>
        <option value="alfamart">Alfamart</option>
        </select></td>

    </table>
    
    <input type="submit" name="simpancheckout" value="Simpan">
    <a href="daftarlagu.php"><input type="button" value="Kembali"></a>
  </form>
  </div>
</body>
</html>