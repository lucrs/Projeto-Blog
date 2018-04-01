<?php

if( isset($_GET['id']) ) {
    $id = $_GET['id'];



    $pdo = db_connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "select nome, comentario from comentarios where id_comentario = $id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $coments = $stmt->fetchAll();



}