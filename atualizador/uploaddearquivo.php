<?php

$_UP['pasta'] = 'uploads/';
$_UP['tamanho'] = 100000000;
$_UP['extensoes'] = array('csv');
$_UP['renomeia'] = false;

// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'N&atilde;o houve erro';
$_UP['erros'][1] = 'O arquivo no upload &eacute; maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'N&atilde;o foi feito o upload do arquivo';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
    die("N&atilde;o foi poss&iacute;vel fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
    exit; // Para a execuÃ§Ã£o do script
}

// Caso script chegue a esse ponto, nÃ£o houve erro com o upload e o PHP pode continuar

// Faz a verificaÃ§Ã£o da extensÃ£o do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
    echo "Por favor, envie arquivo com a seguintes extens&atilde;o: CSV";
    exit;
}

if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
    echo "O arquivo enviado &eacute; muito grande, envie arquivos de at&eacute; ".$_UP['tamanho']." bytes";
    exit;
}

// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
    // Cria um nome baseado no UNIX TIMESTAMP atual e com extensÃ£o .jpg
    $nome_final = md5(time()).'.csv';
} else {
    // MantÃ©m o nome original do arquivo
    $nome_final = $_FILES['arquivo']['name'];
}

// Depois verifica se Ã© possÃ­vel mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
    // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
    echo "Upload efetuado com sucesso!";
    echo '<a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
    include "atualizador.php";
} else {
    echo "N&atilde;o foi poss&iacute;vel enviar o arquivo, tente novamente";
}

echo "</br></br>Finalizado";

?>