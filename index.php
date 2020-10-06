<?php

require_once 'app/core/core.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ErroController.php';
require_once 'app/model/Postagem.php';

$template = file_get_contents('app/template/estrutura.html');

ob_start();
    $core = new Core;
    $core->start($_GET);
    $saida =  ob_get_contents();
ob_end_clean();

$templatePronto = str_replace('{{area_dinamica}}', $saida, $template);

echo $templatePronto;
?>