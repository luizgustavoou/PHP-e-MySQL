<?php
    echo "
    <table border='1'>
    <tr>
        <th>NOME</th>
        <th>SOBRENOME</th>
        <th>SEXO</th>
    </tr>
    ";

    //Conectando ao banco de dados:
    $strcon = mysqli_connect('localhost', 'luizgustavo', '1234', 'banco_teste') or die ('Erro ao conectar ao MySQL');
    $sql = "SELECT * FROM cadastro";
    $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar consultar'); //armazena o recurso MySQL na variável resultado

    //Obtendo os dados por meio de um loop while
    while ($registro = mysqli_fetch_array($resultado)) { //usar um loop para iterar entre os elementos da tabela que está consultando e armazenar cada registro um por vez na variável $registro
        $nome = $registro['NomeCliente']; //coloca o nome dos campos da tabela do bd que queremos pegar
        $sobrenome = $registro['SobrenomeCliente'];
        $sexo = $registro['SEXO']; //notar que o nome do campo tem que ser IGUAL ao nome da coluna na tabela.

        echo "
        <tr>
            <td>$nome</td>
            <td>$sobrenome</td>
            <td>$sexo</td>
        </tr>
        ";

    }

    mysqli_close($strcon);
    echo "</table>";

?>