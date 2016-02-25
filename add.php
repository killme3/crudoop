<?php
require_once ('core/init.php');

if(isset($_POST['tambah'])){
$usercontrol->controltambah();
}
?>

<h2>Tambah Data</h2>

<form action="" method="post">
<label>Nama : </label><input type="text" name="nama" value=""><br>
<label>Password : </label><input type="text" name="password" value=""><br>
<label>Umur : </label><input type="text" name="umur" value=""><br>
<label>Alamat : </label><input type="text" name="alamat" value=""><br>
<input type="submit" name="tambah" value="submit">
</form>
