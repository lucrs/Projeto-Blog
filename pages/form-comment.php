<?php
require '../DB/init.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST') {

        try {
            $nome = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
            $data = date('Y/m/d');
            $comment = isset($_POST['comentario']) ? $_POST['comentario'] : '';


            $PDO = db_connect();
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = 'INSERT INTO comentarios (nome, data,comentario) VALUES (:nome,:data,:comentario)';
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array(
                ':nome' => $nome,
                ':data' => $data,
                ':comentario' => $comment));


                header('Location:blog.php');


        } catch (PDOException $e) {
            echo 'Error' . $e->getMessage();
        }

}




