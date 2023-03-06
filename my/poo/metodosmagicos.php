
<?php 
class Pessoa{
    private $dados = array();
    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }
    public function __get($nome){
        return $this->dados[$nome];
    }
    public function __toString()
    {
        return "tentei imprimir o objeto";
    }
    public function __invoke(){
        return 'objeto como função';
    }
}

$pessoa = new Pessoa();
$pessoa->nome = 'Joao';
$pessoa->idade = 25;
$pessoa->sexo = 'm';

echo $pessoa(); 



?>



