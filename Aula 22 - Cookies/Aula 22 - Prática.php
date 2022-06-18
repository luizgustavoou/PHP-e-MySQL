<?php
        //Os cookies são enviados pelo servidor juntamente com o cabeçalho HTTP. Então quando se vai configura um cookie é importante que o código que configura o cookie esteja logo no início do scrip

        $nome = "Teste";
        $valor = 50;
        $expira = time() + 3600; //uma hora a partir de agora (3600 segundos)
        setcookie($nome, $valor, $expira); //tem vários tipos de cookies disponíveis. Tem os cookie de sessão para fazer o gerenciamento de sesssão do usuário. E os cookies persistentes que tem os prazos de expiração
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravando Cookies</title>
</head>
<body>
    <p>
        Cookie gravado no navegador do usuário!
    </p>
</body>
</html>