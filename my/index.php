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
        $name = 'Joao';
        $age = 20;
        $heigth = 1.70;
        $masc = TRUE;
    ?>
    
    <p>PRINTAR TIPO DE VARIAVEL</p>
    <ul>
        <li>get_debug_type($name): <?= get_debug_type($name)?></li>
        <li>var_dump($name): <?= var_dump($name)?></li>
    </ul>

    <p>TIPOS DE VARIAVEIS</p>
    <ul>
        <li>get_debug_type($name): <?= get_debug_type($name)?></li>
        <li>get_debug_type($age): <?= get_debug_type($age)?></li>
        <li>get_debug_type($heigth): <?= get_debug_type($heigth)?></li>
        <li>get_debug_type($masc): <?= get_debug_type($masc)?></li>
    </ul>

</body>
</html>



