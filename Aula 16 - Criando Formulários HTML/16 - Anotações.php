<?php
    /*
        Formulários HTML

        - Um formulário web é uma página (ou parte de uma página) que contém elementos usados para coletar informações fornecidas pelo usuário, como caixas de texto, listas de seleção de opções, checkboxes e botões de ações, entre outros elementos.
        - Para criarmos um formulário usamos os marcadores <form> e </form>

        -Sintaxe básica do marcador <form>

            <form name= "NOME" action="script" method="método_envio" enctype="tipo">
                elementos do formulário
            </form>

        > name é o nome do formulário, que pode ser usado para referenciá-lo em uma função, por exemplo.
        > action indica o script que deverá efetuar o processamento dos dados inseridos no formulário. Em nosso caso, será um script em PHP.
        > method é o método de envio dos dados para o servidor web onde está o script de processamento. Pode ser GET ou POST.
        > enctype permite definir o formato com que os dados serão codificados antes de serem enviados ao servidor http. Somente é válido quando método de envio for POST.

        _________________________________________________________________________________________________________________________________________

        Métodos GET e POST
        
        - Há dois métodos principais que o navegador do cliente pode usar para enviar os dados do formulário ao servidor: GET e POST.
        - O método de envio GET é limitado a 1024 cacarcteres no envio de dados, e o método POST não possui limite.
        - ALém disso, o método GET envia os dados anexados ao nome do script que foi passado para o parâmetro ACTION, sendo que esses dados (campos e valores) são posicionados após um caractere ? na barra de endereços do navegador, seguindo o nome do script, como em nome=Fabio&sobrenome=dos+Reis&idade=38
        - Já no método POST os dados são enviados no cabeçalho HTTP da mensagem e, portanto, é mais seguro e é o método recomendado.
        - O PHP fornece um array associativo de nome $_POST que permite acessar os dados enviados usando o método POST.

        _________________________________________________________________________________________________________________________________________

        Elemtnos dos Formulários

        - Seguindo a tag <form> indicamos os dados qeu o usuário deve fornecer e o tipo de cada informação. Os dados são inseridos em elementos do formulário (controles), com o uso de tags específicas. Os principais elementos são:
            1) INPUT
            2) SELECT
            3) TEXTAREA
            4) BUTTON
            5) DATALIST (HTML5)
            6) KEYGEN (HTML5)
            7) OUTPUT (HTML5)

        _________________________________________________________________________________________________________________________________________

        1) Elemento INPUT
        
        - É o elemento mais importante, possuindo variações, que dependem de seu atributo type.

        - A sintaxe para uso da tag <input> é a seguinte:

            <input type="tipo" name="nome" value="valor_inicial" size="tamanho" maxlength="caracteres" checked>
        
        > name: Identificação do campo
        > value: valor inicial do campo; é opcional, exceto para os tipos CHECKBOX e RADIO
        > size: tamanho do controle; para os tipos TEXT e PASSWORD indica o nº de caracteres que aparecem no campo
        > maxlength: número máximo de caracteres que podem ser digitados no campo; válido somente para TEXT e PASSWORD
        > checked: define se um campo deve estar marcado inicialmente, sendo válido para os tipos CHECKBOX e RADIO
        > type: O parâmetro type define o tipo de campo a ser utilizado para entrada de dados.

        _________________________________________________________________________________________________________________________________________

        Atributo type - tipos de campos do elemento input

        - Os principais tipos de controles são desctritos a seguir:

        > text: controle de texto de linha única
        > password: caixa de senha
        > textarea: controle de texto multilinhas (multiline)
        > checkbox: campo que permite escolher opções clicando em caixas de verificação
        > radio: campo que permite escolher uma entre várias opções clicando em um botão de rádio
        > hidden: campo que não é visível par ao usupario, e que é usado para o envio de dados para o servidor sem que o usuário interfira
        > submit: botão de envio do formulário
        > reset: botão para "zerar" o formulário, limpando todos os campos e restaurando seus valores iniciais
        > file: Campo usado para o envio de arquivos

        _________________________________________________________________________________________________________________________________________

        Elememento SELECT

        - O elemento SELECT define uma lista de itens, que pode ser drop-down ou não.

        - Sintaxe:
            <select name="nome" multiple>
                <option value="valor1" selected>texto1</option>
                <option value="valor2">texto2</option>
            </select>
        
            >> Elemento option: define os elementos que podem ser selecionados pelo usuário.
            >> Atributo selected: determina que o item estará selecionado por padrão.
            >> Atributo multiple: indica que o controle será uma caixa com múltiplas linhas contendo os elementos, evez de um menu drop-down.

        # Exemplo:
            <select name="tecnologias" id="tecnologias" size="4" multiple>
                <option value="ASP" selected>ASP.NET</option>
                <option value="C">Linguagem C</option>
                <option value="C++">C++</option>
                <option value="Java">Java</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="Ruby">Ruby</option>
            </select></br></br>
        
        _________________________________________________________________________________________________________________________________________

        Elemento TEXTAREA

        - O elemento textarea permite definir um campo de texto com múltiplas linhas disponíveis.

        - Sintaxe:
            <textarea rows="linhas" cols="colunas" name="nome">

            </textarea>
        
        >> Atributo rows: define o número de linhas que o campo terá.
        >> Atributo cols: define o número de colunas que o campo terá.

        # Exemplo:
             <textarea name="comentarios" id="comentarios" cols="50" rows="8"></textarea>

        _________________________________________________________________________________________________________________________________________

        Elemento BUTTON

        - Este elemento é utilizado para definir um botão clicável no formulário, que pode conter texto ou imagens, o que o torna diferente dos botões criados com o elemento input.

        #Exemplo:
            <button type="button" onclick="alert('Bóson Treinamentos!')">
            </button>
    */
?>