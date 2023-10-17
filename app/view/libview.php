<?php 
require_once ('Smarty.class.php');
class LibView{
    private $smarty;

    public function __construct($user){
        $this->smarty = new Smarty();// inicializo Smarty
        $this->smarty->assign('user', $user);
    }

    function Showlib($libros){
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('libros',$libros);
        $this->smarty->display('list.tpl');
    }
    function Showhome(){
        $this->smarty->assign('basehref', BASE_URL);
        $this ->smarty->display('home.tpl');

    }
    function showcart(){
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->display('cart.tpl');

    }
    function showForm($id){ 
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('id',$id);
        $this ->smarty->display('adminform.tpl');
        
      }

}
?>