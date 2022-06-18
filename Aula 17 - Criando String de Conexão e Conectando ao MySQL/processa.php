<?php
    $nome = $_POST['NomeCliente'];
    $sobrenome = $_POST['SobrenomeCliente'];
    $sexo = $_POST['Sexo'];

    $strcon = mysqli_connect('localhost', 'luizgustavo', '1234', 'banco_teste');

    if (!$strcon) {
        die('Não foi possível conectar ao MySQL');
    }
    echo "Conexão realizada com sucesso! </br></br>";
    echo "Nome do Cliente: $nome </br></br>";
    echo "Sobrenome do Cliente: $sobrenome </br></br>";
    echo "Sexo do Cliente: $sexo </br></br>";
    mysqli_close($strcon);
?>