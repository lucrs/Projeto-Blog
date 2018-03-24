<?php
session_start();
require_once '../DB/init.php';

require '../DB/check.php';


if( isset($_GET['id']) ) {
    $id = $_GET['id'];



    $pdo = db_connect();

    $sql = "select * from posts where id_post = $id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);



}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="../css/single-blog.css">
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">
</head>
<body>

<header id="header" class="">
    <div class="header">
        <div class="title-header">
            <h1>Blog do Lucas</h1>
        </div>

    </div>

</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Blog do Lucas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="blog.php">Inicio <span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>



<body id="main-login">
<main>
    <div class="container">
        <div class="row">
            <div class="login">
                            <?php foreach ($result as $row){ ?>
                        <div id="single-blog" class="w3-card-4" >

                            <div class="row">
                                <div class="title-blog">
                                    <h1><a href="single-page.php?id=<?=$row['id_post'];?>"><?=$row['titulo']?></a></h1>
                                </div>

                                <di class="row">

                                </di>
                                <div class="conteudo-blog">
                                    <br> <p><?=$row['conteudo']?></p>
                                </div>

                            </div>
                            <?php }?>
                        </div>
            </div>
        </div>
    </div>


</main>



<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-text col-sm-12 text-center">
                <p>
                    © All Rights Reserved
                    <span>Xtreme Designer</span>
                </p>
            </div>
        </div>
    </div>

</footer>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>
</html>
