<?php
// index.php

// Carrega o carregador do Twig
require_once('twigCarregar.php');

// Mostra o template na tela
echo $twig->render('index.html', [
    'fruta' => 'Abacaxi',
]);