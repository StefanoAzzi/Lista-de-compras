<?php
// fruta.php

// Carrega o carregador do Twig
require('twigCarregar.php');

$frutas = [
    'Abacaxi',
    'Laranja',
    'Banana',
    'Maçã',
    'Uva',
    'Bergamota',
    'Melancia',
];


$frutaEscolhida = $_GET['fruta'] ?? null;

echo $twig->render('fruta.html' , [
    'frutas' => $frutas,
    'frutaEscolhida' => $frutas [$frutaEscolhida] ?? null,
    'titulo' => "Frutas"
]);
