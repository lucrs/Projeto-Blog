<?php




$pdo = db_connect();

$sql = 'select * from posts';

$stmt = $pdo->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);