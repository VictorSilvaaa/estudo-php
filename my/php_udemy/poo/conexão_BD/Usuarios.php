<?php 

require "./Conn.php";

class Usuarios{
    public $connect;

    public function listar(){
        $conn = new Conn();
        $this->connect = $conn->conectar();

        $query_usuarios = 'SELECT id, nome, email from usuarios ORDER BY id DESC LIMIT 40';

        $result_usuarios = $this->connect->prepare($query_usuarios);
        $result_usuarios->execute();

        foreach($result_usuarios as $row_usuario){
            extract($row_usuario);
            echo "Id: $id <br> Nome: $nome <br> Email: $email <hr>";
        }
    }
}