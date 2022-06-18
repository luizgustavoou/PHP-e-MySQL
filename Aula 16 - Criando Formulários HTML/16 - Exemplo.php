<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Web e PHP</title>
</head>
<body>
    <form name="cadastro" action="processa.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" size="30" placeholder="Digite seu nome aqui" autofocus></br></br>

        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" size="50" placeholder="Digite seu sobrenome aqui"></br></br>

        <label>Senha:</label>
        <input type="password" name="senha" id="senha" size="15" required></br></br>

        <label>Sexo:</label></br>
        <input type="radio" name="sexo" id="sexo" value="M">Masculino</br></br>
        <input type="radio" name="sexo" id="sexo" value="F">Feminino</br></br>

        <label>Marque as opções de seu interese:</label></br>
        <input type="checkbox" name="linguagens" id="linguagens" value="ASP"> ASP.NET</br>
        <input type="checkbox" name="linguagens" id="linguagens" value="Javascript"> Javascript</br>
        <input type="checkbox" name="linguagens" id="linguagens" value="PHP"> PHP</br>
        <input type="checkbox" name="linguagens" id="linguagens" value="Python"> Python</br></br>

        <label>Selecione as linguagens de programação:</label></br>
        <select name="tecnologias" id="tecnologias" size="4" multiple>
            <option value="ASP" selected>ASP.NET</option>
            <option value="C">Linguagem C</option>
            <option value="C++">C++</option>
            <option value="Java">Java</option>
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value="Ruby">Ruby</option>
        </select></br></br>

        <label>Entre com seus comentários na caixa a seguir:</label></br>
        <textarea name="comentarios" id="comentarios" cols="50" rows="8"></textarea></br></br>

        <label>Selecione um arquivo de seu computador para upload:</label></br>
        <input type="file" name="arquivo" id="arquivo"></br></br>

        <button type="button" onclick="alert('Bóson Treinamentos!')"> Clique aqui</button></br></br>

        <input type="submit" name="submit" value="Enviar"></br>
        
        <input type="reset" name="reset" value="Limpar"></br>
    </form>
</body>
</html>