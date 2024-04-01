<?php
require_once('twigCarregar.php');

echo $twig->render('contato.html',[
    'titulo' => "Contato"
]);