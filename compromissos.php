<?php
#compromissos.php
require('inc/banco.php');
require('twig_carregar.php');

use Carbon\Carbon;
  
$dados = $pdo->query('SELECT * FROM compromissos');

$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);

foreach ($compromisso as $compromissos){
    if (Carbon::parse($compromisso['data'])->isWeekend()){
        $finalDeSemana = "Fim de semana";
    } else {
        $finalDeSemana = "Dia da semana";
    }
}

echo $twig->render('compromissos.html' , [
    'titulo' => "Compromissos",
    'compromissos' => $compromissos,
    'hoje' => $hoje,
    'finalDeSemana' => $finalDeSemana

]);