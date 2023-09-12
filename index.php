<?php 

// array com os caminhos dos arquivos
$estrutura = [
    'head/head.php',
    'header/header.php',
    'main/main.php',
    'footer/footer.php'
];

// laço de repetição para percorerer cada item do array
// e inseri-lo como argumento para a função require_once()
foreach($estrutura as $value){
    require_once($value);
}


?>