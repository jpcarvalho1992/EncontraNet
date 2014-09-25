<!DOCTYPE html>
<!--
Here comes the text of your license
Each line should be prefixed with 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário Inicial</title>
        <!-- para implementar jquery -->
        <link rel="stylesheet" href="../jquery-ui/css/TemaFormulario/jquery-ui-1.9.2.custom.css">
        <script src="../jquery-ui/js/jquery-1.8.3.js"></script>
        <script src="../jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
        <style> body {background-color: #3399FF;}</style>
        <script>
        var valorCorrente = 0, sent1 = false, sent2 = false, sent3 = false, sent4 = false,
        sent5 = false, sent6 = false, sent7 = false, sent8 = false, sent9 = false, sent10 = false;

            function progressBar_completeHandler() {
                $( "#CaixaTexto2" ).dialog({
                    autoOpen: true
                });
            }

    $(function() {
             $( "#CaixaTexto1" ).dialog({
                    autoOpen: true,
                    width: 800,
                    height:600,
                    modal: true,
                    resizable: false,
                    draggable: false,
                    bgiframe:true});
             $( "#CaixaTexto2" ).dialog({
                    autoOpen: false,
                    width: 800,
                    height:600,
                    modal: true,
                    resizable: false,
                    draggable: false,
                    bgiframe:true});
             $( "#tabs" ).tabs().css({
                'min-height': '400px',
                'overflow': 'auto'});
             $( "#progressbar" ).progressbar({value: 0, complete:progressBar_completeHandler}).data("value","0");
             $('#formulario input[name=primeiraPergunta]').on('change', function() {
                if(sent1 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10,}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent1 = true;
                }
                });
             $('#formulario input[name=segundaPergunta]').on('change', function() {
                if(sent2 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent2 = true;
                } 
                });
             $('#formulario textarea[name=terceiraPergunta]').on('change', function() {
                if(sent3 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent3 = true;
                } 
                });
             $('#formulario input[name=quartaPergunta]').on('change', function() {
                if(sent4 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent4 = true;
                } 
                });
             $('#formulario input[name=quintaPergunta]').on('change', function() {
                if(sent5 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent5 = true;
                } 
                });
             $('#formulario input[name=sextaPergunta]').on('change', function() {
                if(sent6 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent6 = true;
                } 
                });
             $('#formulario input[name=setimaPergunta]').on('change', function() {
                if(sent7 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent7 = true;
                } 
                });
             $('#formulario textarea[name=oitavaPergunta]').on('change', function() {
                if(sent8 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent8 = true;
                } 
                });
              $('#formulario textarea[name=nonaPergunta]').on('change', function() {
                if(sent9 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent9 = true;
                } 
                });
              $('#formulario input[name=decimaPergunta]').on('change', function() {
                if(sent10 === false){
                    $("#progressbar").progressbar({value: valorCorrente + 10}).data("value",valorCorrente + 10);
                    valorCorrente = valorCorrente + 10;
                    sent10 = true;
                } 
                });
        });

        
        </script>
        <!-- fim implementacao jquery -->
    </head>
    <body>
        <div id="CaixaTexto1" title="Formulário EncontraNet - Estudo Mercado">
            <h2 align="center">EncontraNet</h2>
            <h3 align="center">“Produtos artesanais, gastronómicos e caseiros”</h3>
            <h3 align="center">“O Ponto de partida para melhorar o seu negócio ou comprar produtos únicos e feitos exclusivamente em Portugal”</h3>
            <p align="justify">EncontraNet é um projecto jovem, ainda em estado embrionário, que 
            visa criar relações profissionais, entre clientes, fornecedores e 
            produtores, estabelecendo um ponto de encontro, entre a oferta e a 
            procura de produtos artesanais, gastronómicos e produtos caseiros.</p>
            <p align="justify">De forma a tornar-se uma aplicação funcional, versátil e atractiva, 
            pedimos a si, potencial utilizador desta aplicação, uma pequena ajuda, 
            através de um questionário, para recolher opiniões sobre como tornar 
            esta plataforma Web mais atractiva e mais intuitiva para realizarmos 
            um estudo pormenorizado e com o máximo rigor.</p>
            <p align="justify">É necessária a resposta a todas as perguntas para poder submeter o seu questionário.</p>
            <p align="justify">Se está disposto em nos ajudar seja o mais sincero possível, e desde
                já agradecemos pela sua colaboração e total disponibilidade.</p>
        </div>
        <!-- inicio do formulario -->
        <form id="formulario" action="submeterInicial.php" method="POST">
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">1</a></li>
              <li><a href="#tabs-2">2</a></li>
              <li><a href="#tabs-3">3</a></li>
              <li><a href="#tabs-4">4</a></li>
              <li><a href="#tabs-5">5</a></li>
              <li><a href="#tabs-6">6</a></li>
              <li><a href="#tabs-7">7</a></li>
              <li><a href="#tabs-8">8</a></li>
              <li><a href="#tabs-9">9</a></li>
              <li><a href="#tabs-10">10</a></li>
            </ul>
            <div id="tabs-1">
                Acha útil uma aplicação web que visa reunir um conjunto de 
                    fornecedores, vendedores, clientes e produtores de forma a estabelecer 
                    ligações comerciais artesanais e gastronómicas entre eles? Como 
                    se fosse uma feira gastronómica ou de artesanato?
                <br>
                <br>
                <div align="center">
                <input type="radio" name="primeiraPergunta" value="sim">Sim
                <input type="radio" name="primeiraPergunta" value="nao">Não
                </div>
            </div>
            <div id="tabs-2">
                Parece-lhe apelativa uma aplicação que concilia chat( mensagens 
                instantâneas) em tempo real entre os clientes e os produtores, fornecedores e vendedores, 
                    com montra virtual, informações de produtos, empresas 
                    e fornecedores, assim como informação de clientes e sistema de 
                    avaliação( cada cliente votar até 5 estrelas) de todos os intervenientes, de forma a 
                    apresentar o máximo de detalhe possível assim como permitir 
                    métodos de pagamento que vão desde pagamento por multibanco( refência), 
                    PayPal, á cobrança, tudo em ambiente seguro e fidedigno?
                <br>
                <br>
                <div align="center">
                <input type="radio" name="segundaPergunta" value="sim">Sim
                <input type="radio" name="segundaPergunta" value="nao">Não
                </div>
            </div>
            <div id="tabs-3">
                O que mudaria numa aplicação deste tipo de forma a torná-la atractiva?
                Gostariamos que ajudasse-nos com algumas ideias. Se não tiver nenhuma ideia, 
                escreva "sem ideias" na caixa de texto para poder proseguir.
                <br>
                <br>
                <textarea cols="40" rows="5" name="terceiraPergunta" style="width: 100%;height: 250px;resize: none;"></textarea>
            </div>
            <div id="tabs-4">
                Contemplaria a hipótese de utilizar esta plataforma, 
                    sabendo que, para além das funcionalidades já apresentadas, 
                    possui ainda sistema multiplataforma, para ser usada em 
                    qualquer tipo de tablets, computadores e smartphones, assim 
                    como uma procura por localização, de forma a poder estimar 
                    distâncias, e procurar a melhor opção de para uma futura 
                    compra ou venda?
                <br>
                <br>
                <div align="center">
                <input type="radio" name="quartaPergunta" value="sim">Sim
                <input type="radio" name="quartaPergunta" value="nao">Não
                </div>
            </div>
            <div id="tabs-5">
                Com que finalidade utilizaria a nossa aplicação?
                <br>
                <br>
                <div align="center">
                <input type="radio" name="quintaPergunta" value="produtor">Produtor
                <input type="radio" name="quintaPergunta" value="vendedor">Vendedor
                <input type="radio" name="quintaPergunta" value="fornecedor">Fornecedor
                <input type="radio" name="quintaPergunta" value="cliente">Cliente
                </div>
            </div>
            <div id="tabs-6">
                Contemplaria a hipótese de colaborar connosco, de forma 
                    a ajudar-nos a ampliar a divulgação deste projecto?
                <br>
                <br>
                <div align="center">
                <input type="radio" name="sextaPergunta" value="sim">Sim
                <input type="radio" name="sextaPergunta" value="nao">Não
                </div>
            </div>
            <div id="tabs-7">
                Por último, acha que “Encontra.net” é uma designação 
                    adequada, para a aplicação em causa? Gosta desta denominação?
                <br>
                <br>
                <div align="center">
                <input type="radio" name="setimaPergunta" value="sim">Sim
                <input type="radio" name="setimaPergunta" value="nao">Não
                </div>
            </div>
            <div id="tabs-8">
                Que outra alternativa apresentaria? Se não tiver nenhuma ideia, 
                escreva "sem ideias" na caixa de texto para poder proseguir.
                <br>
                <br>
                <textarea name="oitavaPergunta" style="width: 100%;height: 250px;resize: none;"></textarea>
            </div>
            <div id="tabs-9">
                Poderia dar a sua opinião sobre este formulário? Ou incluir outras observações? Se não tiver nenhuma ideia, 
                escreva "sem ideias" na caixa de texto para poder proseguir.
                <br>
                <br>
                <textarea name="nonaPergunta" style="width: 100%;height: 250px;resize: none;"></textarea>
            </div>
            <div id="tabs-10">
                Pode indicar o seu email para podermos depois enviar uma préinscrição, avisos e newsletters?
                <br>
                <br>
                <input type="text" name="decimaPergunta" style="width: 100%"><br>
                <br>
                <br>
                Para enviar as suas respostas clique no botão "submeter".
                <br>
                <br>
                <input type="submit" value="Submeter">
            </div>
          </div>
        </form>   
        <br>
        <br>
        <div id="progressbar"></div>
        <div id="CaixaTexto2" title="Muito obrigado pelo seu tempo">
            <p align="justify">Já finalizou o formulário, agora basta ir a tab Nº10 e submeter as suas respostas. Se
            já estiver nesta aba é só submeter. Muito Obrigado.<p>
        </div>
    </body>
</html>
