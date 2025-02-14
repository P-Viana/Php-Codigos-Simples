<!DOCTYPE html>
<link href='./style.css' rel='stylesheet'>

<?php
    $notas = [8.6 , 7.9 , 4.3 , 3.7 , 9.1]; //Para criar variável digite $ e dê o nome para a variável
    $numero_de_notas = count($notas);

    echo 'Com FOR'.'<br/>'.'<br/>';
    for ($i=0; $i< $numero_de_notas; $i++) //Usando o FOR
    {
        echo 'Sua nota é '.$notas[$i].'<br/>'; //Para concatenar, use o '.'
    }

    echo '<br/>'.'<br/>'.'<br/>';

    echo 'Com FOREACH'.'<br/>'.'<br/>';
    foreach ($notas as $nota) //Usando o FOREACH
    {
        echo 'Sua nota é '.$nota.'<br/>';
    }

    
?>

</html>