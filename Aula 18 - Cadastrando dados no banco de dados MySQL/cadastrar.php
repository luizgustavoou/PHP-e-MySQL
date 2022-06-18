<?php
    $nome = $_POST['NomeCliente'];
    $sobrenome = $_POST['SobrenomeCliente'];
    $sexo = $_POST['Sexo'];

    $strcon = mysqli_connect('localhost', 'luizgustavo', '1234', 'banco_teste') or die('Erro ao conectar ao MySQL');
    $sql = "INSERT INTO cadastro VALUES ('$nome', '$sobrenome', '$sexo')";
    mysqli_query($strcon, $sql) or die ("Erro ao tentar cadastrar registro");
    mysqli_close($strcon);
    echo "Cliente cadastrado com sucesso!";


?>