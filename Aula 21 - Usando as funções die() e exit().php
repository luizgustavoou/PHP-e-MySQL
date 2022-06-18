<?php
    echo "Testando as funções die() e exit() em PHP </br>";

    $strcon = @mysqli_connect('localhost', 'luizgustavo', '1234', 'banco_teste') or exit('Conexão ao banco de dados falhou; contate o administraor do sistema!'); //o @ serve para não mostrar aquele erro grande do php. Tanto faz usar o exit ou die, ambas fazem a mesma funcionalidade

    //die('Script interrompido neste ponto!');
    
    echo "Linha exibida apenas se o script não for interrompido";
?>F