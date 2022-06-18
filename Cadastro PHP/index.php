<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        if (isset($_POST['NomeCliente']) && isset($_POST['SobrenomeCliente']) && isset($_POST['Sexo'])) {
            if (!(empty($_POST['NomeCliente']) || empty($_POST['SobrenomeCliente']) || empty($_POST['Sexo']))) {
                $nome = $_POST['NomeCliente'];
                $sobrenome = $_POST['SobrenomeCliente'];
                $sexo = $_POST['Sexo'];
    
                $strcon = @mysqli_connect('localhost', 'luizgustavo', '1234', 'banco_teste') or die('Erro em conectar ao MySQL.');
                $sql = "INSERT INTO cadastro VALUES ('$nome', '$sobrenome', '$sexo')";
                mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar.');
                mysqli_close($strcon);
                $mensagem = "Cadastro realizado com sucesso.";
            }else {
                $mensagem = "Insere todos os campos.";
            }
        }
    ?>
    <form action="index.php" method="POST">
        <div class="container">
            <div class="box">
                <h1>Sistema de Cadastro</h1></br></br>

                <label>Nome: <input type="text" name="NomeCliente" id="NomeCliente" autofocus placeholder="Digite o nome aqui"></label></br></br>

                <label>Sobrenome: <input type="text" name="SobrenomeCliente" id="SobrenomeCliente" placeholder="Digite o sobrenome aqui"></label></br></br>

                <label>Sexo do Cliente:
                    <select name="Sexo" id="Sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="N">Não Declarado</option>
                </select>
                </label></br></br>

                <input type="submit" name="cadastrar" claas= "cadastrar "value="Cadastrar"></br></br>
                <?php 
                    if (!(empty($mensagem))) {
                        echo $mensagem;
                    }
                ?>
            </div>
        </div>
    </form>
</body>
</html>