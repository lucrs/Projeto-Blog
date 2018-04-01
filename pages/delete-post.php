<?php
require '../DB/init.php';

try{
    $id = $_GET['id'];

    $pdo = db_connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $delete = 'delete from posts where id_post = :id';
    $stmt = $pdo->prepare($delete);

    $stmt->bindParam(':id',$id);
    $stmt->execute();

    header('Location: edit-post.php');


}
catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}