<?php

require('inc/banco.php');

$id = $_GET['id'] ?? null;
$data = $_GET['data'] ?? null;
$descricao = $_GET['descricao'] ?? null;

$query = $pdo->prepare('UPDATE compromissos SET `data` = :data, descricao = :descricao WHERE id = :id');
$query->bindValue(':id', $id);
$query->bindValue(':data', $data);
$query->bindValue(':descricao', $descricao);

$query->execute();

header('location:compromissos.php');
