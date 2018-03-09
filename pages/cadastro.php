<?php
require '../DB/init.php';

try{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cpf = $_POST['cpf'];
    $password =sha1(md5($_POST['password']));


    $PDO= db_connect();

    $sql = 'insert into users (name,email,phone,cpf,password) VALUES (:name,:email,:phone,:cpf,:password)';
    $stmt = $PDO->prepare($sql);
    $stmt->execute(array(
        ':name'=>$name,
        ':email'=>$email,
        ':phone'=>$phone,
        ':cpf'=>$cpf,
        ':password'=>$password
    ));

    header('Location:login.html');

} catch (PDOException $e){
    echo 'Error'. $e->getMessage();
}















