<?php
session_start();
require_once '../DB/init.php';
require '../DB/check.php';
require_once "config-blog.php";
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
    <link rel="stylesheet" href="../css/blog.css">
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
<aside id="aside" role="complementary" class="col-md-4 col-md-pull-8 card">
    <div class="container ">
        <div class="row">
            <div class="aside ">
                <div class="title-aside ">
                    <h1>Sobre Mim</h1>
                </div>
                <div class="img-aside">
                    <img src="../img/about-me.jpg" alt="">
                </div>
                <div class="sub-title-aside">
                    <p>
                        é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e
                        vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou
                        uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a
                        editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na
                        década de 60, quando a Letraset lançou decalques contendo passagens
                    </p>
                </div>
                <div class="social-aside">
                    <a href="/www.facebook.com.br"><span><i class="fab fa-facebook"></i></span></a>
                    <a href=""><span><i class="fab fa-github"></i></span></a>
                    <a href=""><span><i class="fab fa-linkedin"></i></span></a>
                    <a href=""><span><i class="fab fa-youtube"></i></span></a>
                </div>
            </div>
        </div>
    </div>

</aside>
<main>

    <section id="conteudo">
        <div class="container">
            <?php foreach ($result as $row){ ?>
            <div class="row">
                <div class="card card-body card-blog col-md-8 col-md-push-4">
                    <div class="title-blog">
                        <h1><a href="single-page.php?id=<?=$row['id_post'];?>"><?=$row['titulo'];?></a></h1><br>
                    </div>
                    <div class="card-img img-blog">
                        <img src="fotos/<?=$row['image']; ?> "alt="">
                    </div>
                    <div class="conteudo-blog">
                        <p><?=substr($row['conteudo'], 0,250); ?><a href="single-page.php?id=<?=$row['id_post'];?>"</a> Leia mais...</p>

                    </div>
                    </div>

                </div>

            <?php }?>
            </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="blog.php?page=0" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php
                $i= 0;
                for($i=0;$i<$num_paginas;$i++){
                    $estilo = "";
                    if($pagina == $i)
                        $estilo = "class=\"active\"";
                    ?>
                    <li <?= $estilo;?>class="page-item"><a class="page-link" href="blog.php?page=<?= $i; ?>"><?php echo $i+1; ?></a></li>
                <?php }?>
                <li class="page-item">
                    <a class="page-link" href="blog.php?page=<?=$num_paginas-1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>

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
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>
</html>
