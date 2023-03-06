<?php 

class NewsLetter{
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Error Processing Request", 1);
        else:
            echo "email cadastrado com sucesso!";
        endif;
            
    }
}

$newsLetter = new NewsLetter();
try{
    $newsLetter->cadastrarEmail("contato");
}catch(Exception $e){
    echo "Mensagem:". $e->getMessage() ."<br>";
    echo "Código:". $e->getCode() ."<br>";
    echo "Linha:". $e->getLine() ."<br>";
    echo "Arquivo:". $e->getFile();
}


?>