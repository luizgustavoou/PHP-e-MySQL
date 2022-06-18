<?php
    print_r($_COOKIE);
    echo "</br>";

    if(isset($_COOKIE['Teste'])) {
        $valor_cookie = $_COOKIE['Teste'];
        echo "O cookie tem valor de $valor_cookie";
    }else {
        echo "Cookie não encontrado";
    }
?>