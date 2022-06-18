<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando conexão ao banco de dados</title>
</head>
<body>
    <h3>Formulário de Cadastro de Clientes</h3>
    <form name="Cadastro "action="processa.php" method="post">
        <label>Nome do Cliente: <input type="text" name="NomeCliente" id="NomeCliente" size="30" autofocus placeholder="Digite o nome aqui"></label></br></br>

        <label>Sobrenome do cliente: <input type="text" name="SobrenomeCliente" id="SobrenomeCliente" size="45" placeholder="Digite o sobrenome aqui"></label></br></br>

        <label>Sexo do Cliente:
            <select name="Sexo" id="Sexo">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="N">Não Declarado</option>
            </select>
        </label></br></br>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>