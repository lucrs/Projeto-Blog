<?php


if( isset($_GET['id']) ) {
    $id = $_GET['id'];



    $pdo = db_connect();

    $sql = "select * from posts where id_post = $id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

}







