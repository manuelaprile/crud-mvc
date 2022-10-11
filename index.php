<?php 
include_once('config/config.php');
include_once('core/routes.php');
include_once('controllers/Users.php');
if (isset($_GET['controller'])) {
  $controller = loadControler($_GET['controller']);
  if(isset($_GET['action'])){
    if(isset($_GET['id'])){
      loadAction($controller, $_GET['action'], $_GET['id']);
    }else{
      loadAction($controller, $_GET['action']);
    }
  }else{
    loadAction($controller, MAIN_ACTION);
  }
}else{ 
  $controller = loadControler(MAIN_CONTROLLER);
  $actionTmp = MAIN_ACTION;
  $controller->$actionTmp();
}
