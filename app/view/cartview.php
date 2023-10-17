<?php 
require_once 'libs/smarty/libs/Smarty.class.php';

class CartView{
    private $smarty;

    public function __construct($user){
        $this->smarty = new Smarty();// inicializo Smarty
        $this->smarty->assign('user', $user);
    }
    function showcart($libros){
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('libros', $libros);
        $this->smarty->display('cart.tpl');

    }
}

?>