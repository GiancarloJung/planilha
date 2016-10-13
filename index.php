<html>
<head><title>Integrador Correios</title>
    <style>
        body {
            background-image: url(/backlogin.jpg);
            font-family: "Helvetica Neue", Helvetica, Arial;
            padding-top: 20px;
        }

        .container {
            width: 406px;
            max-width: 406px;
            margin: 0 auto;
        }

        #signup {
            padding: 0px 25px 25px;
            background: #fff;
            box-shadow:
                0px 0px 0px 5px rgba( 255,255,255,0.4 ),
                0px 4px 20px rgba( 0,0,0,0.33 );
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            display: table;
            position: static;
        }

        #signup .header {
            margin-bottom: 20px;
            margin-top: 10px;
        }

        #signup .header h3 {
            color: #333333;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #signup .header p {
            color: #8f8f8f;
            font-size: 14px;
            font-weight: 300;
        }

        #signup p {
            color: #8f8f8f;
            font-size: 14px;
            font-weight: 300;
        }

        #signup .sep {
            height: 1px;
            background: #e8e8e8;
            width: 406px;
            margin: 0px -25px;
        }

        #signup .inputs {
            margin-top: 25px;
        }

        #signup .inputs label {
            color: #8f8f8f;
            font-size: 12px;
            font-weight: 300;
            letter-spacing: 1px;
            margin-bottom: 7px;
            display: block;
        }

        input::-webkit-input-placeholder {
            color:    #b5b5b5;
        }

        input:-moz-placeholder {
            color:    #b5b5b5;
        }

        #signup .inputs input[type=email], input[type=password] {
            background: #f5f5f5;
            font-size: 0.8rem;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: none;
            padding: 13px 10px;
            width: 330px;
            margin-bottom: 20px;
            box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
            clear: both;
        }

        #signup .inputs .campo .forms{
            background: #f5f5f5;
            font-size: 0.8rem;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: none;
            padding: 13px 10px;
            width: 330px;
            margin-bottom: 20px;
            box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
            clear: both;
        }

        #signup .inputs .campo:focus {
            background: #fff;
            box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
            outline: none;
        }

        #signup .inputs input[type=email]:focus, input[type=password]:focus {
            background: #fff;
            box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
            outline: none;
        }

        #signup .inputs .checkboxy {
            display: block;
            position: static;
            height: 25px;
            margin-top: 10px;
            clear: both;
        }

        #signup .inputs input[type=checkbox] {
            float: left;
            margin-right: 10px;
            margin-top: 3px;
        }

        #signup .inputs label.terms {
            float: left;
            font-size: 14px;
            font-style: italic;
        }

        #signup .inputs #submit {
            width: 100%;
            margin-top: 20px;
            padding: 15px 0;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            text-align: center;
            text-decoration: none;
            background: -moz-linear-gradient(
                top,
                #b9c5dd 0%,
                #a4b0cb);
            background: -webkit-gradient(
                linear, left top, left bottom,
                from(#b9c5dd),
                to(#a4b0cb));
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            border: 1px solid #737b8d;
            -moz-box-shadow:
                0px 5px 5px rgba(000,000,000,0.1),
                inset 0px 1px 0px rgba(255,255,255,0.5);
            -webkit-box-shadow:
                0px 5px 5px rgba(000,000,000,0.1),
                inset 0px 1px 0px rgba(255,255,255,0.5);
            box-shadow:
                0px 5px 5px rgba(000,000,000,0.1),
                inset 0px 1px 0px rgba(255,255,255,0.5);
            text-shadow:
                0px 1px 3px rgba(000,000,000,0.3),
                0px 0px 0px rgba(255,255,255,0);
            display: table;
            position: static;
            clear: both;
        }

        #signup .inputs #submit:hover {
            background: -moz-linear-gradient(
                top,
                #a4b0cb 0%,
                #b9c5dd);
            background: -webkit-gradient(
                linear, left top, left bottom,
                from(#a4b0cb),
                to(#b9c5dd));
        }
    </style>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-70408160-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<div class="container">

    <form id="signup" action="correios-vtex.php" enctype="multipart/form-data" id="planilha" method="post" name="planilha">

        <div class="header">

            <h3>Integrador Correios</h3>

            <p>Preencha os campos abaixo com os dados do correios.</p>

        </div>

        <div class="sep"></div>

        <div class="inputs">

            <p>Deseja enviar via API?</p>
            <table><tr><td><div class="checkboxy">
                <input name="api" id="api-sim" value="true" type="radio" class="forms api sim"/><label class="terms">Sim</label>
            </div></td><td>
                <div class="checkboxy">
                    <input name="api" id="api-nao" value="false" type="radio" class="forms api nao" checked /><label class="terms">Não</label>
                </div></td></tr></table>

            <div class="api-sim">

                <div class="campo"><input name="accountname" type="text" class="forms" placeholder="Nome da loja(account name):"></div>

                <div class="campo"><input name="id" value="" maxlenght="60" type="text" class="forms" placeholder="Chave da api: "></div>

                <div class="campo"><input name="key" value="" maxlenght="60" type="password" class="forms" placeholder="Token da api:"></div>

            </div>
            <p>Contrato com os correios?</p>
            <table><tr><td><div class="checkboxy">
                <input name="contrato" id="contrato-sim" value="true" type="radio" class="forms contrato sim" /><label class="terms">Sim</label>
            </div></td><td>
                <div class="checkboxy">
                    <input name="contrato" id="contrato-nao" value="false" type="radio" class="forms contrato nao" checked/><label class="terms">Não</label>
                </div></td></tr></table>

            <div class="contrato-sim">
                <div class="campo"><input name="cnpj" value="" maxlenght="60" type="text" class="forms" placeholder="Primeiros 8 digitos CNPJ (ex:01944380):"></div>
                <div class="campo"><input name="cod_adm" value="" maxlenght="60" type="text" class="forms" placeholder="Codigo administrativo (ex:11051213):"></div>
            </div>

            <div class="campo"><input name="cep" value="" maxlenght="60" type="text" class="forms" placeholder="CEP de origem/Centro de Distribuicao (ex:20511000)"></div>

            <div class="campo percentual" style="display:none;">
                <select name="percentual" class="forms">
                    <option value="0" selected>Percentual adicionado no pedido 0%</option>
                    <option value="5">Percentual adicionado no pedido  5%</option>
                </select>
                </select>
            </div>

            <p>Selecione o servi&ccedil;o:</p>

            <div class="nome_campo sedex" ><p>-  Sedex  </p></div>
            <div class="campo sedex"><input name="sedex" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

            <div class="nome_campo sedex40436" ><p>-  Sedex 40436  </p></div>
            <div class="campo sedex40436"><input name="sedex40436" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

            <div class="nome_campo esedex" ><p>-  E-sedex  </p></div>
            <div class="campo esedex"><input name="esedex" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

            <div class="nome_campo pac" ><p>-  PAC  </p></div>
            <div class="campo pac"><input name="pac" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>

            <div class="nome_campo sedex10" ><p>-  Sedex10  </p></div>
            <div class="campo sedex10"><input name="sedex10" value="" maxlenght="60" type="text" class="forms">Digite: sim</div>


            <!--<input type="email" placeholder="e-mail" autofocus />
            <input type="password" placeholder="Password" />-->

            <input id="submit" class="botao-enviar" title="Send" type="submit" value="Gerar arquivo">

        </div>

    </form>

</div>
<script type="text/javascript">
    jQuery(".campo.sedex10").fadeOut();
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
    jQuery( ".nome_campo.sedex10" ).click(
            function() {
                jQuery(".campo.sedex input").val("");
                jQuery(".campo.sedex40436 input").val("");
                jQuery(".campo.sedex10 input").val("s");
                jQuery(".campo.pac input").val("");
                jQuery(".campo.esedex input").val("");
                jQuery( ".nome_campo.pac" ).css("background-color", "white");
                jQuery( ".nome_campo.esedex" ).css("background-color", "white");
                jQuery( ".nome_campo.sedex10" ).css("background-color", "lightblue");
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
​</body>
</html>
