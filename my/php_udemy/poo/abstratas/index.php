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
    
        require "./Cheque.php";
        require "./ChequeComum.php";
        require "./ChequeEspecial.php";

        //classe abstrata nao pode ser instanciada
        // $cheque = new Cheque(207.27, "comum");
        // $msg = $cheque->verValor();
        // echo $msg;

        $chequeComum = new ChequeComum(307.37, "Comum");
        $msgChequecomum = $chequeComum->calcularJuro();
        echo $msgChequecomum;

        $chequeEspecial= new ChequeEspecial(407.47, "Especial");
        $msgEspecial = $chequeEspecial->calcularJuro();
        echo $msgEspecial;
    ?>
</body>
</html>