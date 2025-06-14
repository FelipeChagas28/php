<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
</head>

<body>
    <h1>If e else</h1>
    <?php
    $nome = "Felipe";
    $nota1 = 0;
    $nota2 = 1;

    $media = ($nota1 + $nota2) / 2;

    /*  
       if($media >= 5){
            echo "Parabéns $nome, sua média é $media então você passou!";
        } else {
            echo "Infelizmente $nome, sua média é $media então vc reprovou!";
        }

    */

    if ($media >= 5):
        echo "Parabéns $nome, sua média é $media então você <strong>passou</strong>!";

    elseif ($media >= 1 && $media < 5):
        echo "Infelizmente $nome, sua média é $media então você <strong>reprovou</strong>!";

    else:
        echo "Infelizmente $nome, sua média é $media então você Foi <strong>expulso</strong>!";


    endif;

    ?>
</body>

</html>