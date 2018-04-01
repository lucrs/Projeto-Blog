<?php


require_once '../DB/init.php';

require '../DB/check.php';


//$itens_por_pagina = 5;
//
//// pegar a pagina atual
//$pagina = isset($_GET['page'])? $_GET['page'] : 1;



$pdo = db_connect();

$sql = "select * from posts ORDER BY data DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$num = $stmt->rowCount();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$num_total = $stmt = $pdo->prepare('select * from posts')->rowCount();
//$num_paginas = ceil($num_total/$itens_por_pagina);



