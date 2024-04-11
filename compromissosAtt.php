<?php

require('inc/banco.php');
require('twig_carregar.php');

$dados = $pdo->query('SELECT * FROM compromissos');

$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);

$id = $_GET['id'];

foreach ($compromissos as $compromisso){
    if ($compromisso['id'] == $id){
        $compro = $compromisso;
        break;
    }
}

echo $twig->render('compromissosAtt.html' , [
    'titulo' => "Compromissos",
    'compromisso' => $compro
]); 