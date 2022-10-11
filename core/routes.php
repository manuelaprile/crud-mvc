<?php 

function loadControler($controller){
  $controllerName = ucwords($controller) . "Controller";
  $route = "controllers/". $controller . "php";

  if(!is_file($route)){
    $route = 'controllers/' . MAIN_CONTROLLER . '.php';
  }

  require_once $route;
  $control = new $controllerName();
  return $control;
}

function loadAction($controller, $action, $id = null){
  if(isset($action) && method_exists($controller, $action)){
    if($id == null){
      $controller->$action();
    }else{
      $controller->$action($id);
    }
  }else{
    $controller->MAIN_ACTION();
  }
}
