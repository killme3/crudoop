<?php
include_once ('core/init.php');

$id=$_GET['id'];
$new=$usercontrol->edit($id);
$usercontrol->controledit($id);

while ($row=$new->fetch_assoc()) {
?>

<h2>Edit Data</h2>

<form action="" method="post">
<label>Nama : </label><input type="text" name="nama" value="<?php echo $row['nama'] ; ?> "><br>
<label>Password : </label><input type="text" name="password" value="<?php echo $row['password'] ; ?>"><br>
<label>Umur : </label><input type="text" name="umur" value="<?php echo $row['umur'] ; ?>"><br>
<label>Alamat : </label><input type="text" name="alamat" value="<?php echo $row['alamat'] ; ?>"><br>
<input type="submit" name="submit" value="submit">
<?php } ?>
</form>
