<html>
<head><title>Sobe planilha - planilha primordia</title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Orbitron);
        @import url(http://fonts.googleapis.com/css?family=Roboto);
        h2 {
            font-family: 'Orbitron', sans-serif;
            font-size: 18px;
        }
        .formulario {
            font-family: Roboto, sans-serif;
            font-size: 13px;
        }
    </style>
</head>
<body>
<center>

<table width=400><tr><td>
                <div class="formulario"><div class="conteudo">
                        <h2 style="padding-top:20px;">Atualizador de estoque e preço</h2>
                        <p>Preencha os campos abaixo com os dados necess&aacute;rios:</p>
                        <p>Tamanho m&aacute;ximo do arquivo: 100MB.</p>
                        <p><b>O arquivo deve ter a extens&atilde;o .csv e ter apenas 3 colunas, referência, preço e quantidade. Exatamente nessa ordem.</b></p>


                        <form method="post" action="uploaddearquivo.php" enctype="multipart/form-data">

                            <div class="api-sim">

                                <div class="nome_campo" >Vtex Account Name: </div>
                                <div class="campo"><input name="accountname" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >Id do estoque: </div>
                                <div class="campo"><input name="warehouse" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >App Key: </div>
                                <div class="campo"><input name="accountid" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >App Token: </div>
                                <div class="campo"><input name="accountkey" value="" maxlenght="60" type="text" class="forms"></div>

                            </div>


                            <p>Selecione o arquivo:</p>

                            <div class="nome_campo arquivo" >

                                <p><input type="file" name="arquivo" /></p>

                            </div>

                            </br>

                            <div class="botao"><input class="botao-enviar" title="Send" type="submit" value="Send"></div>

                        </form>
                    </div></div>
            </td></tr></table></center>

<style>
    .nome_campo{padding-top: 10px;   border-radius: 5px;}
    body {background-color:lightblue;}
    .formulario {background-color:white;border-radius:10px;}
    .conteudo {padding-left:20px;padding-bottom:20px;}
</style>
</body>
</html>