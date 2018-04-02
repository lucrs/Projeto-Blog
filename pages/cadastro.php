<?php
require '../DB/init.php';

try{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cpf = $_POST['cpf'];
    $password =sha1(md5($_POST['password']));
    $nivel = '0';


    $pdo= db_connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'insert into users (name,email,phone,cpf,password,nivel) VALUES (:name,:email,:phone,:cpf,:password,:nivel)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=>$name,
        ':email'=>$email,
        ':phone'=>$phone,
        ':cpf'=>$cpf,
        ':password'=>$password,
        ':nivel'=>$nivel
    ));

    header('Location:login.html');

} catch (PDOException $e){
    echo 'Error'. $e->getMessage();
}















