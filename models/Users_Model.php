<?php 

class Users {

  private $conx;

  public function __construct()
  {
    $this->conx = new mysqli('localhost', 'root', '', 'usuarios');
  }

  public function getUsers(){
    $query = $this->conx->query("SELECT * FROM personas");
    $data = [];
    while($row = $query->fetch_object()){
      $data[] = $row;
    }
    return $data;
  }

  public function getUser($id){
    $result = $this->conx->query("SELECT * FROM personas WHERE id='$id' LIMIT 1");
    $data = [];
    while($row = $result->fetch_object()){
      $data[] = $row;
    }
    return $data;
  }

  public function insertUser($name, $dni){
    $query = $this->conx->query("INSERT INTO personas (name, dni) VALUES ('$name', '$dni') ");
  }

  public function updateUser($name, $dni, $id){
    $query = $this->conx->query("UPDATE personas set name='$name', dni='$dni' WHERE id='$id'");
}

public function deleteUser($id){
  $query = $this->conx->query("DELETE FROM personas WHERE id='$id'");
}

}
