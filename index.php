<?php
session_start();

require 'DB/init.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

</head>
<body id="index">
<section >
<div class="container">
    <div class="row">

        <div class="index">
            <div class="title-index">
                <h1>Bem Vindo</h1>
                <h2>Ao Blog do Lucas</h2>
            </div>
            <div class="sub-title">
                <?php if (isLoggedIn()):  ?>
                <div class="visit">
                    <p>Ola, <span><?php echo $_SESSION['user_name'];?>.</span> </p>
                        <div class="button-index">
                            <a class="btn btn-dark" href="pages/painel.php">Painel</a>
                                <?php echo '<a class="btn btn-dark" href="pages/logout.php?token='.md5(session_id()).'">Sair</a>'; ?><!-- adicionar botao entrar blog-->
                        </div>
                </div>
                <?php else: ?><br>
                        <div class="visit">
                            <p>Ola visitante. Faça o login ou o cadastro </p>
                            <div class="button-index">
                                <a class="btn btn-dark" href="pages/login.html">Logar</a>
                                <a class="btn btn-dark" href="pages/cadastro.html">Cadastrar</a>
                            </div>
                        </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

</section>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


