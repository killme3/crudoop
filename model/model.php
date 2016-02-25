<?php

class database{

  public $connect;
  public $table;

  public function __construct($host, $user, $password, $database)
  {

    $this->connect = new mysqli($host, $user, $password, $database) or die($connect->connect_error);
  }

  public function simpan($data, $dimana, $id)
  {
      $user = " UPDATE $this->table set ";

        foreach ($data as $key => $value) {
        $user .= $key .'='.  "'$value'," .' '; 
        }
      $user  =substr($user,0,-2);
      $user .=$dimana.$id;
      $users = $this->connect->query($user);
      return $users;
  }

  public function tambahdata($data)
  {
    $user="insert into $this->table ";
  
    foreach ($data as $key => $nilai) {
      $row   .=',' .$key;
      $value .=", '".$nilai."' ";
    }
      $user  .=" (".substr($row, 1).") ";
      $user  .=" values(".substr($value, 1).") ";
      $query  = $this->connect->prepare($user) or die ($this->connect->error);
      $query->execute();
      return $query;
  }

  public function tampil()
  {

    $user = "SELECT * FROM $this->table";
    $user = $this->connect->query($user);

    return $user;
  }

  public function hapus($id)
  {

    $user = "DELETE FROM $this->table where id = $id";
    $user = $this->connect->query($user) or die ($connect->error);

    return $user;
  }

  public function edit($id)
  {

    $user = "SELECT * FROM $this->table where id = $id";
    $user = $this->connect->query($user) or die($connect->error);

    return $user;
  }

  public function __destruct()
  {
    $this->connect->close();
  }

}

?>

