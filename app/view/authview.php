<?php
require_once 'libs/smarty/libs/Smarty.class.php';

class AuthView {
    private $smarty;

    public function __construct($user) {
        $this->smarty = new Smarty(); // inicializo Smarty
        $this->smarty->assign('user', $user);
    }

    function showFormLogin($error=null){
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign("error", $error);
        $this->smarty->display('form.tpl');
    }
}
?>