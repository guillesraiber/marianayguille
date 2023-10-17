<?php 
require_once 'app/models/cart.model.php';
require_once 'app/controllers/lib.controller.php';
require_once 'app/view/cart.view.php';
require_once 'app/helper/auth.helper.php';
    class CartController {
     private $model;
     private $view;  
     private $helper;

     public function __construct(){
         $this->helper = new AuthHelper();  
         $this->model = new CartModel();
         $this->view = new CartView($this->helper->getUser());
     }  

     
      function showcart(){
        $this -> helper->checkLoggedIn();
        $libros = $this->model->getlibros();
        $this->view->showcart($libros);

      }
      function AgregaralCarro($id){
        $this -> helper->checkLoggedIn();
       $libcontroller= new libController(); 
       $libro = $libcontroller-> getlibro($id);
       $this->model->insertbook($libro);
       header("location:". BASE_URL. 'cart');
      }

      function deletelib($id){
        $this->model->deletebookById($id);
        header("location:". BASE_URL. 'cart');
     }
  
  }
?>