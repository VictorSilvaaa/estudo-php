<?php 

class Usuario {
    public string $nome;
    public int $idade;
    public string $email;

    public function cadastrar($nome,$idade, $email):string{
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;

        return  "O usuario <strong>{$this->nome}</strong> de idade <strong>{$this->idade}</strong> com email <strong>{$this->email}</strong> foi cadastrado com sucesso";
    }
}

$usuario = new Usuario();
$msg = $usuario->cadastrar("Joao",17, "jjj@gmail.com");
echo $msg;