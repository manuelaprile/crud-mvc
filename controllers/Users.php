<?php 


  class UsersController{

    public function __construct()
    {
      require_once('models/Users_Model.php');
    }

    public function index(){
      $user = new Users();
      $data = $user->getUsers('personas');
      include 'views/list.php';
    }

    public function insert(){
      include 'views/insert.php';
    }

    public function insertuser(){
      $name = $_POST['name'];
      $dni = $_POST['dni'];
      $user = new Users();
      $user->insertUser($name, $dni);
      header('location: index.php');
    }

    public function update($id){
      $user = new Users();
      $data = $user->getUser($id);
      include 'views/edit.php';
    }

    public function updateuser(){
      $name = $_POST['name'];
      $dni = $_POST['dni'];
      $id = $_POST['id'];
      $user = new Users();
      $user->updateUser($name, $dni, $id);
      header('location: index.php');
    }

    function delete($id){
      $user = new Users();
      $user->deleteUser($id);
      header('location: index.php');
    }

  }

  

?>
