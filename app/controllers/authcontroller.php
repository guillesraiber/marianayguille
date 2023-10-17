<?php 
    require_once 'app/models/user.model.php';
    require_once 'app/view/auth.view.php';
    require_once 'app/helper/auth.helper.php';
class AuthController {
    private $model;
    private $view;
    private $helper;

    public function __construct() {
        $this->helper = new AuthHelper();
        $this->model = new userModel();
       $this->view = new AuthView($this->helper->getUser());


    }
    public function showFormLogin() {
        $this->view->showFormLogin();
    }
    public function validateUser() {
        // toma los datos del form
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nombre = $_POST['nombre'];

        // busco el usuario por email
        $user = $this->model->getUserByEmail($email);
        
        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && $nombre==$user->Nombre && password_verify($password,$user->password) ) {
            // inicio una session para este usuario
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['USER_NAME'] = $user->Nombre;
            $_SESSION['IS_LOGGED'] = true;
            $_SESSION['IS_ADMIN'] = $user->is_admin;


            header("Location: " . BASE_URL."home");
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }
    public function logout() {
        session_destroy();
        header("Location: " . BASE_URL);
    }
   
}
?>