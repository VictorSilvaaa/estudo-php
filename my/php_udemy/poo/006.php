<?php 

class Usuario{
    public function cadastrar(){
        return "Usuario cadastrado com sucesso!<br>";
    }
}

$usuario = new Usuario();
$msg=  $usuario->cadastrar();
echo $msg;


