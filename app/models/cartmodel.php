<?php 
class CartModel{

    private $db;

    public function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_libros;charset=utf8', 'root', '');
    }
    /**
     * Devuelve la lista de libros.
     */
    
    
    public function insertbook($libro) {        
           
        $email = $_SESSION['USER_EMAIL'];
         $query = $this->db->prepare ("INSERT INTO  compra_clientes(id_libro, email,nombre_libro, total) VALUES (?,?,?,?)");
         $query->execute([$libro->id_libro, $email, $libro->nombre, $libro->precio]);
        
    } 

    public function getlibros(){
        $query = $this->db->prepare("SELECT * FROM compra_clientes");
        $query->execute();  
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un objeto
        return $libros;
    }

    function deletebookById($id) {
        $query = $this->db->prepare("DELETE FROM compra_clientes WHERE id_libro=?");
        $query->execute([$id]);
    }
}

?>