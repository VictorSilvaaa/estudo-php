<?php 

class Conn{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "celke";
    public $port = 3306;
    public $connect = null;


    public function conectar(){
        try{
            //conexão com porta
            // $this->connect = new PDO(
            // 'mysql:host=' . $this->host . 
            // ';port=' . $this->port .
            // ';dbname=' . $this->dbname, 
            // $this->user, 
            // $this->pass);

            //conexão sem a porta    
            $this->connect = new PDO(
            'mysql:host=' . $this->host . 
            ';dbname=' . $this->dbname, 
            $this->user, 
            $this->pass);
            echo "conexão realizada <hr>";

            return $this->connect;

        }catch ( Exception $err) {
            echo "Conexão não realizada com sucesso!<br> Erro gerado: {$err}<br><br>";
            return false;
        }
    }
}
