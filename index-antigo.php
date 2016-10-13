<html>
<head><title>Planilha primordia</title>
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
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<center>
    <div class="topo" style="height: 30px; width: 700px;">
        <p class="topolink" style="margin-left: 20px;">
            <a href="http://planilha.primordia.com.br/">Integrador correios</a> |
            <a href="http://planilha.primordia.com.br/sobeplanilhaindex.php">Sobe planilha</a>
        </p>
    </div>
    <table width=400><tr><td>
                <div class="formulario"><div class="conteudo">
                        <h2 style="padding-top:20px;">Integrador correios</h2>
                        <p>Preencha os campos abaixo com os dados do correios:</p>


                        <form action="correios-vtex.php" enctype="multipart/form-data" id="planilha" method="post" name="planilha">

                            <div class="nome_campo contrato">Deseja enviar via api?: </div>
                            <div class="campo contrato"><input name="api" value="true" type="radio" class="forms api sim"> sim <input name="api" value="false" type="radio" class="forms api nao" checked> n&atilde;o</div>
                            <div class="api-sim">

                                <div class="nome_campo" >Nome da loja(account name): </div>
                                <div class="campo"><input name="accountname" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >Chave da api: </div>
                                <div class="campo"><input name="id" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >Token da api: </div>
                                <div class="campo"><input name="key" value="" maxlenght="60" type="text" class="forms"></div>

                            </div>

                            <div class="nome_campo contrato">Contrato com Correios?: </div>
                            <div class="campo contrato"><input name="contrato" value="true" type="radio" class="forms contrato sim"> sim <input name="contrato" value="false" type="radio" class="forms contrato nao" checked> n&atilde;o</div>
                            <div class="contrato-sim">
                                <div class="nome_campo" >Primeiros 8 digitos CNPJ (ex:01944380): </div>
                                <div class="campo"><input name="cnpj" value="" maxlenght="60" type="text" class="forms"></div>

                                <div class="nome_campo" >Codigo administrativo (ex:11051213): </div>
                                <div class="campo"><input name="cod_adm" value="" maxlenght="60" type="text" class="forms"></div>
                            </div>

                            <div class="nome_campo" >CEP de origem/Centro de Distribuicao (ex:20511000): </div>
                            <div class="campo"><input name="cep" value="" maxlenght="60" type="text" class="forms"></div>

                            <div class="nome_campo" >Percentual a ser adicionado (ex: 20%): </div>
                            <div class="campo percentual">
                                <select name="percentual" class="forms">
                                    <option value="0" selected>0%</option>
                                    <option value="5">5%</option>
                                </select>
                                </select>
                            </div>

                            <p>Selecione o servi&ccedil;o:</p>

                            <div class="nome_campo sedex" >[ Sedex ] </div>
                            <div class="campo sedex"><input name="sedex" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

                            <div class="nome_campo sedex40436" >[ Sedex 40436 ] </div>
                            <div class="campo sedex40436"><input name="sedex40436" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

                            <div class="nome_campo esedex" >[ E-sedex ]</div>
                            <div class="campo esedex"><input name="esedex" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

                            <div class="nome_campo pac" >[ PAC ]</div>
                            <div class="campo pac"><input name="pac" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

                            </br>

                            <div class="botao"><input class="botao-enviar" title="Send" type="submit" value="Gerar"></div>

                        </form>
                    </div></div>
            </td></tr></table></center>
<script type="text/javascript">
    jQuery(".campo.esedex").fadeOut();
    jQuery(".campo.pac").fadeOut();
    jQuery(".campo.sedex").fadeOut();
    jQuery(".campo.sedex40436").fadeOut();
    jQuery(".contrato-sim").fadeOut();
    jQuery(".nome_campo.sedex40436").fadeOut();
    jQuery(".nome_campo.esedex").fadeOut();
    jQuery(".api-sim").fadeOut();
    jQuery( ".nome_campo.sedex" ).click(
        function() {
            jQuery(".campo.sedex input").val("s");
            jQuery(".campo.esedex input").val("");
            jQuery(".campo.pac input").val("");
            jQuery(".campo.sedex40436 input").val("");
            jQuery( ".nome_campo.pac" ).css("background-color", "white");
            jQuery( ".nome_campo.esedex" ).css("background-color", "white");
            jQuery( ".nome_campo.sedex40436" ).css("background-color", "white");
            jQuery( ".nome_campo.sedex" ).css("background-color", "lightblue");
        });
    jQuery( ".nome_campo.esedex" ).click(
        function() {
            jQuery(".campo.sedex input").val("");
            jQuery(".campo.esedex input").val("s");
            jQuery(".campo.pac input").val("");
            jQuery(".campo.sedex40436 input").val("");
            jQuery( ".nome_campo.pac" ).css("background-color", "white");
            jQuery( ".nome_campo.sedex40436" ).css("background-color", "white");
            jQuery( ".nome_campo.esedex" ).css("background-color", "lightblue");
            jQuery( ".nome_campo.sedex" ).css("background-color", "white");
        });
    jQuery( ".nome_campo.sedex40436" ).click(
        function() {
            jQuery(".campo.sedex input").val("");
            jQuery(".campo.sedex40436 input").val("s");
            jQuery(".campo.pac input").val("");
            jQuery(".campo.esedex input").val("");
            jQuery( ".nome_campo.pac" ).css("background-color", "white");
            jQuery( ".nome_campo.esedex" ).css("background-color", "white");
            jQuery( ".nome_campo.sedex40436" ).css("background-color", "lightblue");
            jQuery( ".nome_campo.sedex" ).css("background-color", "white");
        });
    jQuery( ".nome_campo.pac" ).click(
        function() {
            jQuery(".campo.sedex input").val("");
            jQuery(".campo.esedex input").val("");
            jQuery(".campo.sedex40436 input").val("");
            jQuery(".campo.pac input").val("s");
            jQuery( ".nome_campo.pac" ).css("background-color", "lightblue");
            jQuery( ".nome_campo.esedex" ).css("background-color", "white");
            jQuery( ".nome_campo.sedex40436" ).css("background-color", "white");
            jQuery( ".nome_campo.sedex" ).css("background-color", "white");
        });
    jQuery( ".contrato.nao" ).click(
        function() {
            jQuery(".contrato-sim").fadeOut();
            jQuery(".nome_campo.esedex").fadeOut();
            jQuery(".nome_campo.sedex40436").fadeOut();
            jQuery(".contrato-nao").fadeIn();

        });
    jQuery( ".contrato.sim" ).click(
        function() {
            jQuery(".contrato-nao").fadeOut();
            jQuery(".contrato-sim").fadeIn();
            jQuery(".nome_campo.esedex").fadeIn();
            jQuery(".nome_campo.sedex40436").fadeIn();

        });
    jQuery( ".api.nao" ).click(
        function() {
            jQuery(".api-sim").fadeOut();
            jQuery(".api-nao").fadeIn();

        });
    jQuery( ".api.sim" ).click(
        function() {
            jQuery(".api-nao").fadeOut();
            jQuery(".api-sim").fadeIn();

        });
</script>
<style>
    .nome_campo.sedex{cursor:pointer;width:80px;padding-left:8px;}
    .nome_campo.sedex40436{cursor:pointer;width:90px;padding-left:8px;}
    .nome_campo.esedex{cursor:pointer;width:80px;padding-left:8px;}
    .nome_campo.pac{cursor:pointer; width:80px;padding-left:8px;}
    .nome_campo{padding-top: 10px;   border-radius: 5px;}
    body {background-color:lightblue;}
    .formulario {background-color:white;border-radius:10px;}
    .conteudo {padding-left:20px;padding-bottom:20px;}
</style>
</body>
</html>
