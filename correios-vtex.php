<?php
//Codigo administrativo
$user = $_POST['cod_adm'];
//Primeiros 8 digitos CNPJ
$pwd = $_POST['cnpj'];
//CEP de origem/Centro de Distribuicao
$storeZipCode = $_POST['cep'];
// se tem contrato
$hasContract = $_POST['contrato'];

if($hasContract=="true"){
    if($_POST['sedex']!=""){
        $sedexc = true;
    }else{
        $sedexc = false;
    }
    if($_POST['sedex40436']!=""){
        $sedex40436 = true;
    }else{
        $sedex40436 = false;
    }
    if($_POST['pac']!=""){
        $pacc = true;
    }else{
        $pacc = false;
    }
    if($_POST['esedex']!=""){
        $esedex = true;
    }else{
        $esedex = false;
    }
}else{
    $esedex = false;
    $pacc = false;
    $sedexc = false;
    $sedex40436 = false;
}
if($hasContract=="false"){
    if($_POST['sedex']!=""){
        $sedex = true;
    }else{
        $sedex = false;
    }
    if($_POST['pac']!=""){
        $pac = true;
    }else{
        $pac = false;
    }
}else{
    $sedex = false;
    $pac = false;
}
$availableServices = array(
    array('cod' => '40010','service' => 'Sedex Sem Contrato', 'active' => $sedex),
    array('cod' => '40096','service' => 'Sedex Com Contrato', 'active' => $sedexc),
    array('cod' => '41106','service' => 'PAC Sem Contrato', 'active' => $pac),
    array('cod' => '41068','service' => 'PAC Com Contrato', 'active' => $pacc),
    array('cod' => '81019','service' => 'E-Sedex Com Contrato', 'active' => $esedex),
    array('cod' => '40436','service' => 'Sedex 40436', 'active' => $sedex40436),
    array('cod' => '40215','service' => 'Sedex 10', 'active' => false),
    array('cod' => '40290','service' => 'Sedex HOJE', 'active' => false),
    array('cod' => '40045','service' => 'Sedex a Cobrar', 'active' => false)
);
$zipCodes = array(
    array('SP - Capital','01000000','09999999','04811210'),
    array('SP - Interior',10000000,19999999,14801000),
    array('RJ - Capital',20000000,24799999,20270270),
    array('RJ - Interior',24800000,28999999,24800001),
    array('ES - Capital',29000000,29184999,29060370),
    array('ES - Interior',29185000,29999999,29200250),
    array('MG - Capital',30000000,34999999,30190000),
    array('MG - Interior',35000000,39999999,35930075),
    array('BA - Capital',40000000,43849999,40110010),
    array('BA - Interior',43850000,48999999,44260000),
    array('SE - Capital',49000000,49099999,49027000),
    array('SE - Interior',49100000,49999999,49220000),
    array('PE - Capital',50000000,54999999,50610360),
    array('PE - Interior',55000000,56999999,55805000),
    array('AL - Capital',57000000,57099999,57046270),
    array('AL - Interior',57100000,57999999,57230000),
    array('PB - Capital',58000000,58099999,58011040),
    array('PB - Interior',58100000,58999999,58428720),
    array('RN - Capital',59000000,59099000,59030380),
    array('RN - Interior',59100000,59999999,59140840),
    array('CE - Capital',60000000,61699999,60165082),
    array('CE - Interior',61700000,63999999,61930000),
    array('PI - Capital',64000000,64099999,64001280),
    array('PI - Interior',64100000,64999999,64310000),
    array('MA - Capital',65000000,65099000,65026260),
    array('MA - Interior',65100000,65999999,65275000),
    array('PA - Capital',66000000,67999999,66010902),
    array('PA - Interior',68000000,68899999,68385000),
    array('AP - Capital',68900000,68929999,68901100),
    array('AP - Interior',68930000,68999999,68970000),
    array('AM - Capital',69000000,69099000,69020210),
    array('AM - Interior',69100000,69299000,69110000),
    array('RR - Capital',69300000,69339999,69312450),
    array('RR - Interior',69340000,69399999,69340000),
    array('AM - Interior',69400000,69899999,69480000),
    array('AC - Capital',69900000,69920999,69906380),
    array('AC - Interior',69921000,69999999,69921000),
    array('DF - Capital',70000000,73699999,70040902),
    array('GO - Interior',73700000,76799999,75044450),
    array('RO - Capital',76800000,76834999,76829684),
    array('RO - Interior',76835000,76999999,76870762),
    array('TO - Capital',77000000,77299999,77020116),
    array('TO - Interior',77300000,77999999,77818550),
    array('MT - Capital',78000000,78169999,78020010),
    array('MT - Interior',78170000,78899999,78307000),
    array('MS - Capital',79000000,79124999,79002400),
    array('MS - Interior',79125000,79999999,79200000),
    array('PR - Capital',80000000,83729999,80010000),
    array('PR - Interior',83730000,87999999,84015070),
    array('SC - Capital',88000000,88139999,88010500),
    array('SC - Interior',88140000,89999999,88220000),
    array('RS - Capital',90000000,94999999,90450090),
    array('RS - Interior',95000000,99999999,95680000)
);
$esedexZipCodes = array(
    array('Rio Branco',69900000,69924999,69906380),
    array('AL Maceió',57000000,57099999,57046270),
    array('AM Manaus',69000000,69099999,69020210),
    array('AP Macapá',68900000,68911999,68901100),
    array('Salvador',40000000,42599999,40110010),
    array('Lauro de Freitas',42700000,42700999,42700000),
    array('Feira de Santana',44000000,44099999,44001072),
    array('Vitória da Conquista',45000000,45099999,45026970),
    array('Ilhéus',45650000,45659999,45655455),
    array('Fortaleza',60000000,60999999,60165082),
    array('Caucaia',61600000,61659999,60165082),
    array('Maracanaú',61900000,61939999,61930000),
    array('Brasília',70000000,72999999,70040902),
    array('Brasília',73000000,73499999,70040902),
    array('Vitória',29000000,29099999,29060370),
    array('Vila Velha',29100000,29134999,29102040),
    array('Cariacica',29140000,29159999,29151570),
    array('Serra',29160000,29184999,29176970),
    array('Guarapari',29200000,29229999,29200060),
    array('Cachoeiro de Itapemirim',29300000,29320999,29300020),
    array('Colatina',29700000,29719999,29700025),
    array('Linhares',29900000,29919999,29900021),
    array('Valparaíso de Goiás',72870000,72879999,72870510),
    array('Luziânia',72800000,72859999,72800040),
    array('Goiânia',74000000,74799999,74013050),
    array('Aparecida de Goiânia',74800000,74999999,74905116),
    array('Anápolis',75000000,75149999,75020190),
    array('São Luís',65000000,65099999,65071135),
    array('Belo Horizonte',30000000,31999999,30110013),
    array('Contagem',32000000,32399999,32010262),
    array('Ibirité',32400000,32499999,32400000),
    array('Betim',32500000,32899999,32625098),
    array('Santa Luzia',33000000,33199999,33010500),
    array('Vespasiano',33200000,33299999,33200978),
    array('Lagoa Santa',33400000,33499999,33400000),
    array('Pedro Leopoldo',33600000,33699999,33600000),
    array('Ribeirão das Neves',33800000,33950999,33809045),
    array('Nova Lima',34000000,34299999,34000000),
    array('Sabará',34500000,34799999,34505125),
    array('Caeté',34800000,34989999,34800000),
    array('Governador Valadares',35000000,35099999,35010100),
    array('Ipatinga',35160000,35164999,35160009),
    array('Divinópolis',35500000,35504999,35500027),
    array('Sete Lagoas',35700000,35704999,35700007),
    array('Juiz de Fora',36000000,36099999,36010001),
    array('Varginha',37000000,37109999,37002010),
    array('Poços de Caldas',37700000,37719999,37700396),
    array('Uberaba',38000000,38099999,38010010),
    array('Uberlândia',38400000,38415999,38400036),
    array('Montes Claros',39400000,39409999,39400020),
    array('Campo Grande',79000000,79124999,79005000),
    array('Dourados',79800000,79849999,79800010),
    array('Cuiabá',78000000,78099999,78005080),
    array('Rondonópolis',78700000,78750999,78700030),
    array('Belém',66000000,66999999,66645972),
    array('Ananindeua',67000000,67199999,67010030),
    array('João Pessoa',58000000,58099999,58010000),
    array('Campina Grande',58400000,58439999,58429900),
    array('Recife',50000000,52999999,50010970),
    array('Olinda',53000000,53399999,53010031),
    array('Paulista',53400000,53499999,53401226),
    array('Jaboatão dos Guararapes',54000000,54499999,54070060),
    array('Caruaru',55000000,55099999,55002051),
    array('Petrolina',56300000,56334999,56302040),
    array('Teresina',64000000,64099999,64000190),
    array('Curitiba',80000000,82999999,80010200),
    array('São José do Pinhais',83000000,83149999,83005020),
    array('Pinhais',83320000,83349999,83320040),
    array('Colombo',83400000,83417999,83401270),
    array('Ponta Grossa',84000000,84099999,84010070),
    array('Guarapuava',85000000,85109999,85010000),
    array('Cascavel',85800000,85820999,85801095),
    array('Foz do Iguaçu',85850000,85871999,85851170),
    array('Londrina',86000000,86099999,86010110),
    array('Maringá',87000000,87099999,87005085),
    array('Rio de Janeiro',20000000,20299999,20240070),
    array('Rio de Janeiro',20500000,23799999,22740050),
    array('Angra dos Reis',23900000,23959999,23950000),
    array('Niterói',24000000,24399999,24350000),
    array('São Gonçalo',24400000,24799999,24450000),
    array('Duque de Caxias',25000000,25499999,25050000),
    array('São João de Meriti',25500000,25599999,25550000),
    array('Petrópolis',25600000,25779999,25650000),
    array('Teresópolis',25950000,25995999,25955000),
    array('Nova Iguaçu',26000000,26099999,26050000),
    array('Belford Roxo',26100000,26199999,26195000),
    array('Nova Iguaçu',26200000,26299999,26295000),
    array('Nilópolis',26500000,26549999,26545001),
    array('Mesquita',26550000,26599999,26550050),
    array('Volta Redonda',27200000,27299999,27215971),
    array('Barra Mansa',27300000,27399999,27350970),
    array('Resende',27500000,27549999,27523320),
    array('Macaé',27900000,27979999,27961970),
    array('Campos dos Goitacazes',28000000,28099999,28060750),
    array('Nova Friburgo',28600000,28636999,28623060),
    array('Cabo Frio',28900000,28924999,28905970),
    array('Natal',59000000,59139999,59014323),
    array('Parnamirim',59140000,59161999,59146370),
    array('Mossoró',59600000,59649999,59625120),
    array('Porto Velho',76800000,76834999,76820972),
    array('Boa Vista',69300000,69339999,69318714),
    array('Porto Alegre',90000000,91999999,90880130),
    array('Canoas',92000000,92449999,92010973),
    array('São Leopoldo',93000000,93179999,93017970),
    array('Sapucaia do Sul',93200000,93249999,93201971),
    array('Esteio',93250000,93299999,93270530),
    array('Novo Hamburgo',93300000,93599999,93301970),
    array('Gravataí',94000000,94399999,94090490),
    array('Viamão',94400000,94729999,94480435),
    array('Alvorada',94800000,94889999,94834670),
    array('Cachoeirinha',94900000,94999999,94910030),
    array('Caxias do Sul',95000000,95124999,95055010),
    array('Bento Gonçalves',95700000,95700999,95700000),
    array('Pelotas',96000000,96099999,96060700),
    array('Rio Grande',96200000,96219999,96207000),
    array('Santa Cruz do Sul',96800000,96849999,96841040),
    array('Santa Maria',97000000,97119999,97037014),
    array('Passo Fundo',99000000,99099999,99052840),
    array('Florianópolis',88000000,88099999,88066297),
    array('São José',88100000,88123999,91520651),
    array('Palhoça',88130000,88138999,88130742),
    array('Itajaí',88300000,88319999,88306310),
    array('Balneário Camboriú',88330000,88339999,88330084),
    array('Brusque',88350000,88359999,88354071),
    array('Garopaba',88495000,88499999,88495000),
    array('Criciúma',88800000,88819999,88813476),
    array('Blumenau',89000000,89099999,89015010),
    array('Joinville',89200000,89239999,89239400),
    array('Jaraguá do Sul',89250000,89269999,89255560),
    array('Chapecó',89800000,89816199,89809846),
    array('Aracaju',49000000,49098999,49003247),
    array('São Paulo','01000000','09999999','04811210'),
    array('Santos',11000000,11249999,11015050),
    array('Bertioga',11250000,11299999,11250000),
    array('São Vicente',11300000,11399999,11349970),
    array('Guarujá',11400000,11499999,11495970),
    array('Cubatão',11500000,11599999,11523040),
    array('Praia Grande',11700000,11729999,11700860),
    array('Taubaté',12000000,12119999,12086100),
    array('São José dos Campos',12200000,12248999,12243262),
    array('Caçapava',12280000,12299999,12284400),
    array('Jacareí',12300000,12349999,12302303),
    array('Pindamonhangaba',12400000,12449999,12412823),
    array('Guaratinguetá',12500000,12524999,12522635),
    array('Lorena',12600000,12614999,12610200),
    array('Cachoeira Paulista',12630000,12689999,12630000),
    array('Bragança Paulista',12900000,12929999,12927161),
    array('Atibaia',12940000,12954999,12948280),
    array('Campinas',13000000,13139999,13053090),
    array('Paulínia',13140000,13140999,13140753),
    array('Sumaré',13170000,13182999,13178575),
    array('Hortolândia',13183000,13189999,13185576),
    array('Jundiaí',13200000,13219999,13214880),
    array('Itatiba',13250000,13259999,13252800),
    array('Valinhos',13270000,13279999,13278600),
    array('Vinhedo',13280000,13280999,13280000),
    array('Itu',13300000,13314999,13301321),
    array('Salto',13320000,13329999,13324800),
    array('Indaiatuba',13330000,13349999,13347600),
    array('Piracicaba',13400000,13427999,13409040),
    array('Ártemis (Distrito de Piracicaba)',13432000,13432999,13432030),
    array('Santa Bárbara DOeste',13450000,13459999,13459506),
    array('Nova Odessa', 13460000,13464999,13460000),
    array('Americana',13465000,13479999,13479770),
    array('Limeira',13480000,13489999,13482890),
    array('Rio Claro',13500000,13507999,13502545),
    array('São Carlos',13560000,13577999,13574970),
    array('Araras',13600000,13609999,13601970),
    array('Ribeirão Preto',14000000,14114999,14075970),
    array('Sertãozinho',14160000,14179999,14169377),
    array('Franca',14400000,14414999,14412277),
    array('Araraquara',14800000,14811999,13467061),
    array('São José do Rio Preto',15000000,15099999,15056052),
    array('Catanduva',15800000,15819999,15804500),
    array('Araçatuba',16000000,16129999,16070601),
    array('Birigui',16200000,16209999,16206112),
    array('Bauru',17000000,17109999,17037420),
    array('Jaú',17200000,17220999,17212669),
    array('Marília',17500000,17529999,17514841),
    array('Sorocaba',18000000,18109999,18108971),
    array('Votorantin',18110000,18119999,18115050),
    array('Tatuí',18270000,18282999,18278270),
    array('Botucatu',18600000,18617999,18607180),
    array('Presidente Prudente',19000000,19109999,19026020),
    array('Assis',19800000,19819999,19805000),
    array('Palmas',77000000,77249999,77064557)
);
$pacOnlyWeight = array(
    array(0,0.5),
    array(0.501,1),
    array(1.001,1.500),
    array(1.501,2)
);
$sedexOnlyWeight = array(
    array(0,0.3),
    array(0.301,1),
    array(1.001,2)
);
$weights = array(
    array(0,0.5),
    array(0.501,1),
    array(1.001,1.500),
    array(1.501,2),
    array(2.001,3),
    array(3.001,4),
    array(4.001,5),
    array(5.001,6),
    array(6.001,7),
    array(7.001,8),
    array(8.001,9),
    array(9.001,10),
    array(10.001,11),
    array(11.001,12),
    array(12.001,13),
    array(13.001,14),
    array(14.001,15),
    array(15.001,16),
    array(16.001,17),
    array(17.001,18),
    array(18.001,19),
    array(19.001,20),
    array(20.001,21),
    array(21.001,22),
    array(22.001,23),
    array(23.001,24),
    array(24.001,25),
    array(25.001,26),
    array(26.001,27),
    array(27.001,28),
    array(28.001,29),
    array(29.001,30)
);
$weightsEsedex = array(
    array(0,0.5),
    array(0.501,1),
    array(1.001,1.500),
    array(1.501,2),
    array(2.001,3),
    array(3.001,4),
    array(4.001,5),
    array(5.001,6),
    array(6.001,7),
    array(7.001,8),
    array(8.001,9),
    array(9.001,10),
    array(10.001,11),
    array(11.001,12),
    array(12.001,13),
    array(13.001,14),
    array(14.001,15),
);
$methodLabels = array(
    '40010' => 'Sedex',
    '40096' => 'Sedex',
    '40436' => 'Sedex',
    '81019' => 'E-Sedex',
    '41106' => 'PAC',
    '41068' => 'PAC',
    '40215' => 'Sedex 10',
    '40290' => 'Sedex Hoje',
    '40045' => 'Sedex a Cobrar',
);
$activeServices = array();
foreach($availableServices as $service){
    if($service['active'])
        $activeServices[] = $service;
}
$webservice = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL';
$client = @new SoapClient($webservice, array(
    'trace' => true,
    'exceptions' => true,
    'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
    'connection_timeout' => 1000
));
$params = new stdClass;
$params->nCdServico = '';
foreach($activeServices as $service)
    $params->nCdServico .= $service['cod'].",";
$params->nCdServico = rtrim($params->nCdServico, ',');
$params->nCdEmpresa = '';
$params->sDsSenha = '';
if($hasContract=="true"){
    $params->nCdEmpresa = $user; $params->sDsSenha = $pwd;
}
$params->sCepOrigem = $storeZipCode;
$params->StrRetorno = 'xml';
// VALORES MINIMOS DO PAC (SE VC PRECISAR ESPECIFICAR OUTROS FAÇA ISSO AQUI)
$params->nVlComprimento = '18';
$params->nVlDiametro = 5;
$params->nVlAltura = 2;
$params->nVlLargura = 11;
// OUTROS OBRIGATORIOS (MESMO VAZIO)
$params->nCdFormato = 1;
$params->sCdMaoPropria = 'N';
$params->nVlValorDeclarado = 0;
$params->sCdAvisoRecebimento = 'N';
$matrixRateFile = fopen($service['cod']."-vtex.csv","w");
//Headers
fputcsv($matrixRateFile,array('ZipCodeStart','ZipCodeEnd','WeightStart','WeightEnd','AbsoluteMoneyCost','PricePercent','PriceByExtraWeight','MaxVolume','TimeCost','Country','MinimumValueInsurance','operationType','restrictedFreights'));
foreach($zipCodes as $zipcode){
    // Pac com contrato
    if($availableServices[3]['active']){
        foreach($weights as $pacWeight){
            try{
                $params->sCepDestino = $zipcode[3];
                $params->nVlPeso = $pacWeight[1];
                //$before = microtime(true);
                $response = $client->CalcPrecoPrazo($params);
                //echo 'WebService Latency: '.(int)((microtime(true)-$before)*1000)."ms\n";
                if($response->CalcPrecoPrazoResult->Servicos->cServico->Erro == '0')
                    fputcsv($matrixRateFile,array($zipcode[1],$zipcode[2],$pacWeight[0]*1000,$pacWeight[1]*1000,str_replace(",",".",$response->CalcPrecoPrazoResult->Servicos->cServico->Valor),(int)($_POST["percentual"]),'0','100000000',(int)($response->CalcPrecoPrazoResult->Servicos->cServico->PrazoEntrega).'.00:00:00','BRA','0',1,''));
                else{
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->MsgErro;
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->Codigo;
                    echo $zipcode[1]." a ".$zipcode[2];
                    echo $pacWeight[0]." a ".$pacWeight[1];
                }
            }
            catch (SoapFault $e){
                echo "<pre>SoapFault: ".print_r($e, true)."</pre>\n";
            }
            catch (Exception $e){
                echo "<pre>Exception: ".print_r($e, true)."</pre>\n";
            }
        }
    }
    // Pac sem contrato
    if($availableServices[2]['active']){
        foreach($weights as $pacWeight){
            try{
                $params->sCepDestino = $zipcode[3];
                $params->nVlPeso = $pacWeight[1];
                //$before = microtime(true);
                $response = $client->CalcPrecoPrazo($params);
                //echo 'WebService Latency: '.(int)((microtime(true)-$before)*1000)."ms\n";
                if($response->CalcPrecoPrazoResult->Servicos->cServico->Erro == '0')
                    fputcsv($matrixRateFile,array($zipcode[1],$zipcode[2],$pacWeight[0]*1000,$pacWeight[1]*1000,str_replace(",",".",$response->CalcPrecoPrazoResult->Servicos->cServico->Valor),(int)($_POST["percentual"]),'0','100000000',(int)($response->CalcPrecoPrazoResult->Servicos->cServico->PrazoEntrega).'.00:00:00','BRA','0',1,''));
                else{
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->MsgErro;
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->Codigo;
                    echo $zipcode[1]." a ".$zipcode[2];
                    echo $pacWeight[0]." a ".$pacWeight[1];
                }
            }
            catch (SoapFault $e){
                echo "<pre>SoapFault: ".print_r($e, true)."</pre>\n";
            }
            catch (Exception $e){
                echo "<pre>Exception: ".print_r($e, true)."</pre>\n";
            }
        }
    }
    // Sedex com contrato
    if($availableServices[1]['active']){
        foreach($weights as $sedexWeight){
            try{
                $params->sCepDestino = $zipcode[3];
                $params->nVlPeso = $sedexWeight[1];
                //$before = microtime(true);
                $response = $client->CalcPrecoPrazo($params);
                //echo 'WebService Latency: '.(int)((microtime(true)-$before)*1000)."ms\n";
                if($response->CalcPrecoPrazoResult->Servicos->cServico->Erro == '0')
                    fputcsv($matrixRateFile,array($zipcode[1],$zipcode[2],$sedexWeight[0]*1000,$sedexWeight[1]*1000,str_replace(",",".",$response->CalcPrecoPrazoResult->Servicos->cServico->Valor),(int)($_POST["percentual"]),'0','100000000',(int)($response->CalcPrecoPrazoResult->Servicos->cServico->PrazoEntrega).'.00:00:00','BRA','0',1,''));
                else{
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->MsgErro;
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->Codigo;
                    echo $zipcode[1]." a ".$zipcode[2];
                    echo $sedexWeight[0]." a ".$sedexWeight[1];
                }
            }
            catch (SoapFault $e){
                echo "<pre>SoapFault: ".print_r($e, true)."</pre>\n";
            }
            catch (Exception $e){
                echo "<pre>Exception: ".print_r($e, true)."</pre>\n";
            }
        }
    }
    // Sedex 40436
    if($availableServices[5]['active']){
        foreach($weights as $sedexWeight){
            try{
                $params->sCepDestino = $zipcode[3];
                $params->nVlPeso = $sedexWeight[1];
                //$before = microtime(true);
                $response = $client->CalcPrecoPrazo($params);
                //echo 'WebService Latency: '.(int)((microtime(true)-$before)*1000)."ms\n";
                if($response->CalcPrecoPrazoResult->Servicos->cServico->Erro == '0')
                    fputcsv($matrixRateFile,array($zipcode[1],$zipcode[2],$sedexWeight[0]*1000,$sedexWeight[1]*1000,str_replace(",",".",$response->CalcPrecoPrazoResult->Servicos->cServico->Valor),(int)($_POST["percentual"]),'0','100000000',(int)($response->CalcPrecoPrazoResult->Servicos->cServico->PrazoEntrega).'.00:00:00','BRA','0',1,''));
                else{
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->MsgErro;
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->Codigo;
                    echo $zipcode[1]." a ".$zipcode[2];
                    echo $sedexWeight[0]." a ".$sedexWeight[1];
                }
            }
            catch (SoapFault $e){
                echo "<pre>SoapFault: ".print_r($e, true)."</pre>\n";
            }
            catch (Exception $e){
                echo "<pre>Exception: ".print_r($e, true)."</pre>\n";
            }
        }
    }
    // Sedex sem contrato
    if($availableServices[0]['active']){
        foreach($weights as $sedexWeight){
            try{
                $params->sCepDestino = $zipcode[3];
                $params->nVlPeso = $sedexWeight[1];
                //$before = microtime(true);
                $response = $client->CalcPrecoPrazo($params);
                //echo 'WebService Latency: '.(int)((microtime(true)-$before)*1000)."ms\n";
                if($response->CalcPrecoPrazoResult->Servicos->cServico->Erro == '0')
                    fputcsv($matrixRateFile,array($zipcode[1],$zipcode[2],$sedexWeight[0]*1000,$sedexWeight[1]*1000,str_replace(",",".",$response->CalcPrecoPrazoResult->Servicos->cServico->Valor),(int)($_POST["percentual"]),'0','100000000',(int)($response->CalcPrecoPrazoResult->Servicos->cServico->PrazoEntrega).'.00:00:00','BRA','0',1,''));
                else{
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->MsgErro;
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->Codigo;
                    echo $zipcode[1]." a ".$zipcode[2];
                    echo $sedexWeight[0]." a ".$sedexWeight[1];
                }
            }
            catch (SoapFault $e){
                echo "<pre>SoapFault: ".print_r($e, true)."</pre>\n";
            }
            catch (Exception $e){
                echo "<pre>Exception: ".print_r($e, true)."</pre>\n";
            }
        }
    }
}
// E-sedex
if($availableServices[4]['active']){
    foreach($esedexZipCodes as $zipcode){
        foreach($weightsEsedex as $weight){
            try{
                $params->sCepDestino = $zipcode[3];
                $params->nVlPeso = $weight[1];
                //$before = microtime(true);
                $response = $client->CalcPrecoPrazo($params);
                //echo 'WebService Latency: '.(int)((microtime(true)-$before)*1000)."ms\n";
                if($response->CalcPrecoPrazoResult->Servicos->cServico->Erro == '0')
                    fputcsv($matrixRateFile,array($zipcode[1],$zipcode[2],$weight[0]*1000,$weight[1]*1000,str_replace(",",".",$response->CalcPrecoPrazoResult->Servicos->cServico->Valor),(int)($_POST["percentual"]),'0','100000000',(int)($response->CalcPrecoPrazoResult->Servicos->cServico->PrazoEntrega).'.00:00:00','BRA','0',1,''));
                else
                    echo $response->CalcPrecoPrazoResult->Servicos->cServico->MsgErro ." - ".$response->CalcPrecoPrazoResult->Servicos->cServico->Codigo ." - ".$zipcode[1]." a ".$zipcode[2]." - ".$weight[0]." a ".$weight[1]."\n";
            }
            catch (SoapFault $e){
                echo "<pre>SoapFault: ".print_r($e, true)."</pre>\n";
                break 2;
            }
            catch (Exception $e){
                echo "<pre>Exception: ".print_r($e, true)."</pre>\n";
                break 2;
            }
        }
    }
}
fclose($matrixRateFile);
$url = $service['cod']."-vtex.csv";
echo "<div class='link'>Arquivo gerado.</br>Clique no link para baixar o arquivo: <a href='".$url."'>Planilha ". $service['service'] ." gerada.</a></div>";

if($_POST['api']=="true"){

    $accountName = $_POST['accountname'];

    $freightTableId = $service['cod'];

    $url_carrier = 'http://'. $accountName .'.vtexcommercestable.com.br/api/logistics/pvt/configuration/carriers/';

    $url_freights = 'http://'. $accountName .'.vtexcommercestable.com.br/api/logistics/pvt/configuration/freights/'. $freightTableId .'/values/update';


    $data_carrier = array(
        "id" => $freightTableId,
        "name" => $service['service'],
        "slaType" => "Normal",
        "scheduledDelivery" => false,
        "maxRangeDelivery" => 0,
        "dayOfWeekForDelivery"=>null,
        "dayOfWeekBlockeds"=>[],
        "freightValue"=>[
        ],
        "factorCubicWeight"=>null,
        "freightTableProcessStatus"=>1,
        "freightTableValueError"=>null,
        "modals"=>[],
        "onlyItemsWithDefinedModal"=>false,
        "deliveryOnWeekends"=>false,
        "carrierSchedule"=>[],
        "maxDimension"=>[],
        "exclusiveToDeliveryPoints"=>false,
        "minimunCubicWeight"=>0.0,
        "isPolygon"=>false

    );


    if (($handle = fopen($url, 'r')) === false) {
        die('Error opening file, unable to upload file.');
    }

    $headers = fgetcsv($handle, 1024, ',');
    $linhas[] = array();

    while ($row = fgetcsv($handle, 1024, ',')) {
        $linhas[] = array_combine($headers, $row);
    }

    fclose($handle);


    $url_send_carrier = $url_carrier;
    $str_data_carrier = json_encode($data_carrier);

    $url_send_freights = $url_freights;
    $str_data_freights = json_encode($linhas);

    function sendPostData($url_ws, $post){
        $ch = curl_init($url_ws);
        $ID = $_POST['id'];
        $Key = $_POST['key'];
        $headers= array('Content-Type: application/json','X-VTEX-API-AppKey:'.$ID.'', 'X-VTEX-API-AppToken:'.$Key);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);  // Seems like good practice
        return $result;
    }

    echo "<div class='resultado1'>Finalizado cadastro da transportadora (" . sendPostData($url_send_carrier, $str_data_carrier).")</div>";

    echo "<div class='resultado2'>Finalizado cadastro dos valores " . sendPostData($url_send_freights, $str_data_freights) . "</div>";
}
echo "<style>body {background-image: url(/backlogin.jpg);} .link, .resultado1, .resultado2 { background-color: white; border-radius: 5px;width: 600px;height: 60px;margin-top: 20px; }</style>";
?>
