<?php
// index.php

// Carrega o carregador do Twig
require('twig_carregar.php');

// Mostra o template na tela
echo $twig->render('index.html', [
    'fruta' => 'Abacaxi',
]);