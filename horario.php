<?php
# horario.php

require('twig_carregar.php');

use Carbon\Carbon;

$hoje = Carbon::now('America/Sao_Paulo') 
    ->locale('pt-BR') 
    ->isoFormat('LLLL');

$amanha = Carbon::now('America/Sao_Paulo') 
    ->addDay() 
    ->locale('pt-BR') 
    ->isoFormat('LLLL');

echo $twig->render('horario.html' , [
    'titulo' => "Horário",
    'hoje' => $hoje,
    'amanha' => $amanha
]);