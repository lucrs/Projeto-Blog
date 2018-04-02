<?php

require '../DB/init.php';

$email = isset($_POST['email'])? $_POST['email']: '';
$password = isset($_POST['password'])?$_POST['password']: '';


if (empty($email) || empty($password)){
    echo 'Informe email e senha';
    exit;
}

$passwordHash = make_hash($password);

$pdo = db_connect();

$sql = "select id, name,email,phone,cpf,nivel from users where email= :email and password= :password";
$stmt = $pdo->prepare($sql);


$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
$_SESSION['user_email'] = $user['email'];
$_SESSION['user_phone'] = $user['phone'];
$_SESSION['user_cpf'] = $user['cpf'];
$_SESSION['user_nivel'] = $user['nivel'];


header('Location: ../index.php');
