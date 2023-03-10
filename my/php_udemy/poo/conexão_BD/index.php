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
        require "./Usuarios.php";

        //instanciando a classe
        $listarUsuarios = new Usuarios();
        $result_usuarios = $listarUsuarios->listar();
        echo $result_usuarios;
    ?>
</body>
</html>