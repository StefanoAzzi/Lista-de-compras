<?php

require('inc/banco.php');

$id = $_GET['id'] ?? null;
$item = $_GET['item'] ?? null;

$query = $pdo->prepare('UPDATE compras SET item = :item WHERE id = :id');
$query->bindValue(':id', $id);
$query->bindValue(':item', $item);

$query->execute();


header('location:compras.php');
