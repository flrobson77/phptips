<?php

require __DIR__ . "/vendor/autoload.php";

/*echo "<h1> Ola mundo!! </h1>";*/

# Cabecalho
include 'header.php';

# Conteudo da página
$pagina = $_GET['pagina'];

if($pagina == 'aulas'){
    include '_views/aulas.php';
}
else{
    include '_views/home.php';
}

# Rodape
include 'footer.php';