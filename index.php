<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <?php
        if (isset($_POST['NomeCliente']) && isset($_POST['SobrenomeCliente']) && isset($_POST['SexoCliente'])) {
            if (!(empty($_POST['NomeCliente']) || empty($_POST['SobrenomeCliente']) || empty($_POST['SobrenomeCliente']))) {
                $mysql = @mysqli_connect('localhost', 'luizgustavo', '1234', 'banco_teste') or die('Não foi possível acessar ao MySQL.');

                $nome_cliente = $_POST['NomeCliente'];
                $sobrenome_cliente = $_POST['SobrenomeCliente'];
                $sexo_cliente = $_POST['SexoCliente'];

                @mysqli_query($mysql, "INSERT INTO cadastro VALUES ('$nome_cliente', '$sobrenome_cliente', '$sexo_cliente')") or die('Erro ao tentar cadastrar');
                mysqli_close($mysql);
                $mensagem = 'Cadastro realizado com sucesso.';
            }else {
                $mensagem = 'Insere todos os campos.';
            }
        }
    ?>
    <form action="index.php" method="POST">
        <main>
            <div class="box">
                <div class="elemento">
                    <h1>Sistema de Cadastro</h1>
                    <label>Nome: <input type="text" name="NomeCliente" id="NomeCliente placeholder="Digite seu nome aqui." autofocus></label>
                    <label>Sobrenome: <input type="text" name="SobrenomeCliente" id="SobrenomeCliente" placeholder="Digite seu sobrenome aqui."></label>
                    <label>Sexo do Cliente: 
                        <select name="SexoCliente" id="SexoCliente">
                            <option value="M" selected>Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="N">Não declarado</option>
                        </select>
                    </label>
                    <label><input type="submit" value="Cadastrar"></label>
                    <p><?php
                        if (isset($mensagem)) {
                            echo $mensagem;
                        }
                    ?></p>
                </div>
            </div>
        </main>
    </form>
</body> 
</html>