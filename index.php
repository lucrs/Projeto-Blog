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

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
            </div>
            <div class="sub-title">
                <?php if (isLoggedIn()):  ?>
                    <p>Ola, <?php echo $_SESSION['user_name'];?>. </p>
                        <div class="button-index">
                            <a class="btn btn-danger" href="pages/painel.php">Painel</a>
                            <a class="btn btn-info"href="pages/logout.php">Sair</a>
                        </div>
                <?php else: ?>
                    <br><p>Ola visitante. </p>
                        <div class="visit">
                            <a class="btn btn-dark" href="pages/login.html">Login</a>
                        </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

</section>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


