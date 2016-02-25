<?php
require_once ('core/init.php');

class control extends database
{
 
    function controledit($id)
    {
    	if(isset($_POST['submit'])){
    	  $nama     = $_POST['nama'];
        $password = $_POST['password'];
        $umur     = $_POST['umur'];
        $alamat   = $_POST['alamat'];
        $dimana   = "WHERE id=";
        $data     = array ('nama'=>$nama, 'password'=>$password, 'umur'=>$umur, 'alamat'=>$alamat);

          if($this->simpan($data, $dimana, $id)){
            header ('location:index.php');
          }else{
            echo "gagal edit";
          }
      }
    }

    function controltambah()
    {
      	$nama     = $_POST['nama'];
        $password = $_POST['password'];
        $umur     = $_POST['umur'];
        $alamat   = $_POST['alamat'];
        $data     = array ('nama'=>$nama, 'password'=>$password, 'umur'=>$umur, 'alamat'=>$alamat);

          if($this->tambahdata($data)){
            header ('location:../latihanCRUDoop/index.php');
          }else{
            echo 'gagal tambah data !!';
          }
    }
}

$usercontrol = new control('localhost', 'root','','crud');
$usercontrol->table = 'biodata';

?>
