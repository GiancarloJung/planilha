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
<div class="topo" style="height: 30px; width: 700px;">
    <p class="topolink" style="margin-left: 20px;">
        <a href="http://planilha.primordia.com.br/">Integrador correios</a> |
        <a href="http://planilha.primordia.com.br/sobeplanilhaindex.php">Sobe planilha</a>
    </p>
</div>

<table width=400><tr><td>
                <div class="formulario"><div class="conteudo">
                        <h2 style="padding-top:20px;">Sobe planilha</h2>
                        <p>Preencha os campos abaixo com os dados necess&aacute;rios:</p>
                        <p>Tamanho m&aacute;ximo do arquivo: 100MB.</p>
                        <p><b>O arquivo deve ter a extens&atilde;o .csv e estar no formato VTEX.</b></p>


                        <form method="post" action="uploaddearquivo.php" enctype="multipart/form-data">

                            <div class="api-sim">

                                <div class="nome_campo" >Nome da loja(account name): </div>
                                <div class="campo"><input name="accountname" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >Nome da transportadora: </div>
                                <div class="campo"><input name="freighttableid" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >Chave da api: </div>
                                <div class="campo"><input name="id" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >Token da api: </div>
                                <div class="campo"><input name="key" value="" maxlenght="60" type="text" class="forms"></div>

                            </div>


                            <p>Selecione o arquivo:</p>

                            <div class="nome_campo arquivo" >

                                <p><input type="file" name="arquivo" /></p>

                            </div>

                            </br>

                            <div class="botao"><input class="botao-enviar" title="Send" type="submit" value="Enviar"></div>

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