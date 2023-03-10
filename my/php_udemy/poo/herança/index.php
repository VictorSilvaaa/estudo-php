<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //inclui o arquivo
        require "./Cliente.php";
        require "./ClientePessoaFisica.php";
        require "./ClientePessoaJuridica.php";

        //instanciando a classe
        $cliente = new Cliente();
        $cliente->logradouro = "Rua fe em deus";
        $cliente->bairro = "Coroadinho";
        $msg = $cliente->verEndereco();
        echo $msg;
        echo "<hr>";

        $clientePf = new ClientePessoaFisica();
        $clientePf->logradouro = "Avenida tal";
        $clientePf->bairro = "Bairro tal";
        $clientePf->nome = "nome tal";
        $clientePf->cpf= 12345678;
        $msgPf = $clientePf->verInformacaoUsuario();
        echo $msgPf;
        echo "<hr>";

        $clientePj = new ClientePessoaJuridica();
        $clientePj->logradouro = "Avenida tal";
        $clientePj->bairro = "Bairro tal";
        $clientePj->nomeFantasia = "nome tal";
        $clientePj->cnpj= 12345678;
        $msgPj = $clientePj->verInformacaoUsuario();
        echo $msgPj;
        echo "<hr>";
    ?>
</body>
</html>