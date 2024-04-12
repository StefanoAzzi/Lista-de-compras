<?php
#compromissos.php
require('inc/banco.php');
require('twig_carregar.php');

use Carbon\Carbon;
  
$dados = $pdo->query('SELECT * FROM compromissos');

$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);

foreach ($compromissos as $indice => $compromisso){
    $dataConv = Carbon::parse($compromisso['data']);
    if ($dataConv->isWeekend()){
        $compromisso['fimDeSemana'] = "Fim de semana";
        $compromissos[$indice] = $compromisso;
    } else { 
        $compromisso['fimDeSemana'] = "Dia da semana";
        $compromissos[$indice] = $compromisso;
    }
}

echo $twig->render('compromissos.html' , [
    'titulo' => "Compromissos",
    'compromissos' => $compromissos
]); 