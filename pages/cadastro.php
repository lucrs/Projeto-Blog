<?php
require_once '../DB/conn.php';

try{

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $senha =md5($_POST['senha']);

    $stmt = $conn->prepare('insert into cadastros (nome,email,telefone,cpf,senha) VALUES (:nome,:email,:telefone,:cpf,:senha)');
    $stmt->execute(array(
        ':nome'=>$nome,
        ':email'=>$email,
        ':telefone'=>$tel,
        ':cpf'=>$cpf,
        ':senha'=>$senha
    ));

    echo $stmt->rowCount();

} catch (PDOException $e){
    echo 'Error'. $e->getMessage();
}









