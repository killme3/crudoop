<?php
include_once ('core/init.php');
//script tampil data
$new=$usercontrol->tampil();

//script hapus data
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$usercontrol->hapus($id);
	if($usercontrol){
    header ('location:index.php');
}
}
?>

  <a href="add.php">Tambah Data</a><br><br> 
  <table border=0 >
		
			<th width=50px>No</th>
			<th width=300px>Nama</th>
			<th width=100px>Password</th>
			<th width=100px>Umur</th>
			<th width=100px>Alamat</th>
			<th width=100px>Action</th>
		
		<br>

	<?php  $no =1 ; while($row=$new->fetch_assoc()) : ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><label><?php echo $row['nama'] ; ?></label></td>
			<td><label><?php echo $row['password'] ; ?></label></td>
			<td><label><?php echo $row['umur'] ; ?></label></td>
			<td><label><?php echo $row['alamat'] ; ?></label></td>
			<td style="background-color:white;"><a onclick="return confirm('Yakin menghapus Data ?'); " href="index.php?id=<?php echo $row['id'] ; ?>">Hapus</a>
			<a href="edit.php?id=<?php echo $row['id'] ; ?>">Edit</a><br></td>
		</tr>
	<?php endwhile; ?>
  </table>
