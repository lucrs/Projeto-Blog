<?php
require '../DB/init.php';
if($_SERVER['REQUEST_METHOD']=='POST') {

        try {
            $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $data = date('Y/m/d');
            $comment = isset($_POST['comentario']) ? $_POST['comentario'] : '';


            $PDO = db_connect();
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = 'INSERT INTO comentarios (nome, email, data,comentario) VALUES (:nome,:email,:data,:comentario)';
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array(
                ':nome' => $nome,
                ':email' => $email,
                ':data' => $data,
                ':comentario' => $comment));


                header('Location:blog.php');


        } catch (PDOException $e) {
            echo 'Error' . $e->getMessage();
        }

}

//$servername = "localhost";
//$username = "root";
//$password = "123456";
//$dbname = "painel";
//
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$nome=$_POST['nome'];
//$email=$_POST['email'];
//$data = date("Y/m/d");
//$comentario=$_POST['comentario'];
//
//$sql = "INSERT INTO comentarios (nome, email, data,comentario)
//VALUES ('$nome', '$email', '$data','$comentario')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();