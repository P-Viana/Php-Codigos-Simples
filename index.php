<!DOCTYPE html>
<link href='./style.css' rel='stylesheet'>

<?php
    $nota1 = 7.8; //Para criar variável digite $ e dê o nome para a variável
    $nota2 = 8.7;
    if (($nota1 + $nota2)/2 >= 7) //Condicional IF
    {
        $media = ($nota1 + $nota2)/2;
        echo 'Passou no teste!';
    }
    else //E o ELSE
    {
        $media = ($nota1 + $nota2)/2;
        echo 'Não passou no teste';
    }
    echo '<br/>';
    echo 'Sua média é ';
    echo $media; // Para escrever digite echo e digite o que quer, seja variável, seja texto

    
?>

</html>