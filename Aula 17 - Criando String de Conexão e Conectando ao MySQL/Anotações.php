<?php
    /* 
        - Dados necessários para a criação do script de processamento em PHP:
            1) IP ou HOSTNAME do servidor MySQL;
            2) Nome de usuário do banco de dados;
            3) Senha do usuário.
            4) Nome do Banco de Dados a acessar;

        Primeiro é necessário criar uma STRING de conexão. Essa string de conexão vai conter os dados necessários para efetuar a conexão ao banco de dados:

            $strcon = mysqli_connect('localhost', 'luizgustavo', '1234', 'banco_teste')

            - Essa função vai utilizar 4 argumentos: 1) nome do servidor, 2)nome do usuário, 3)senha do usuário, 4)nome do banco de dados


        Depois vamos criar uma condição para o $strcon:

            if (!$strcon) {
                die('Não foi possível conectar ao MySQL');
            }
            echo 'Conexão realizada com sucesso! </br></br>';
            echo 'Nome do Cliente $nome </br>':
            echo 'Sobrenome do Cliente: $sobrenome </br>';
            echo 'Sexo do Cliente: $sexo </br>';
            mysqli_close($strcon); //esssa função vai fechar a conexão ao banco de dados
    */
?>