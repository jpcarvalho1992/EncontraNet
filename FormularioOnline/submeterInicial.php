<!DOCTYPE html>
<!--
Here comes the text of your license
Each line should be prefixed with 
-->
<?php
    $pergunta1 = $_POST['primeiraPergunta'];
    $pergunta2 = $_POST['segundaPergunta'];
    $pergunta3 = $_POST['terceiraPergunta'];
    $pergunta4 = $_POST['quartaPergunta'];
    $pergunta5 = $_POST['quintaPergunta'];
    $pergunta6 = $_POST['sextaPergunta'];
    $pergunta7 = $_POST['setimaPergunta'];
    $pergunta8 = $_POST['oitavaPergunta'];
    $pergunta9 = $_POST['nonaPergunta'];
    $pergunta10 = $_POST['decimaPergunta'];
    
    mysql_connect("jpcarvalhonet.ipagemysql.com","jpcarvalho","12345");
    mysql_select_db("encontranet_dados") or die( "Unable to select database");
    
    $query = "INSERT INTO `formularioinicial`(`n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `email`) VALUES ('$pergunta1','$pergunta2',"
            . "'$pergunta3','$pergunta4','$pergunta5','$pergunta6','$pergunta7','$pergunta8','$pergunta9','$pergunta10')";
    
    $result = mysql_query($query);
    
    mysql_close();
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Obrigado</title>
        <!-- para implementar jquery -->
        <link rel="stylesheet" href="../jquery-ui/css/TemaFormulario/jquery-ui-1.9.2.custom.css">
        <script src="../jquery-ui/js/jquery-1.8.3.js"></script>
        <script src="../jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
        <style> body {background-color: #3399FF;}</style>
        <script>
     $(function() {
             $( "#CaixaTexto2" ).dialog({
                    autoOpen: true,
                    width: 800,
                    height:600,
                    modal: true,
                    resizable: false,
                    draggable: false,
                    bgiframe:true});});
        </script>
        <!-- fim implementacao jquery -->
    </head>
    <body>
        <div id="CaixaTexto2" title="Muito obrigado pelo seu tempo">
            <p align="justify">Formulário enviado com sucesso. A equipa do Encontra.net agradece a sua colaboração. A sua opinião 
            é importante para nos ajudar a crescer.<p>
            <p align="center">Muito obrigado.</p>
            <p align="center">A equipa EncontraNet</p>
        </div>
    </body>
</html>
