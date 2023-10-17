<?php
require_once 'app/controllers/lib.controller.php';
require_once 'app/controllers/auth.controller.php';
require_once 'app/controllers/cart.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action='home';
}

$params = explode('/', $action);
// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'home':
        $libController = new libController();
        $libController->showhome();
        break;
    case 'list':
        $libController = new libController();
       $libController->Showlib();
        break;
    case 'cart':
        $cartcontroller = new CartController();
        $cartcontroller->showcart();
        break;    
    case 'delete':
        // obtengo el parametro de la acción
        $cartcontroller = new CartController();
        $id = $params[1];
        $cartcontroller->deletelib($id);
        break;  
    case  'Agregaralcarrito':
        $cartController = new CartController();
        $cartController->AgregaralCarro($params[1]);
        break;
    case'form':
        $libController= new libController();
        $id = $params[1];
        $libController->showform($id);
    case 'modify':
        $libController= new libController();
        $libController->Modify($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}