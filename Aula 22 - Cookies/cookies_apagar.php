<?php
    setcookie("Teste"); //nao apaga, sei la
    //unset($_COOKIE['Teste']); //apaga so nesse arquivo.php
    echo "Apagado </br>";
    print_r($_COOKIE);
?>