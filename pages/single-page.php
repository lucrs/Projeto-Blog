<?php
session_start();
require_once '../DB/init.php';
require_once 'single-config.php';

require_once 'comment.php';

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
            <li class="nav-item active">
                <a class="nav-link" href="painel.php">Painel <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">

                <?php echo '<a class="nav-link" href="logout.php?token='.md5(session_id()).'">Sair<span class="sr-only">(current)</span></a>'; ?>
            </li>

        </ul>
    </div>
</nav>



<body id="main-login">
<main>
    <section id="conteudo">
    <div class="container">
        <div class="row">
            <div class="login">
                            <?php foreach ($result as $row){ ?>
                        <div id="single-blog" class="w3-card-4" >

                            <div class="row">
                                <div class="title-single">
                                    <h1><?=$row['titulo']?></h1>
                                </div>

                                <di class="row">

                                </di>
                                <div class="conteudo-single">
                                    <br> <p><?=$row['conteudo']?></p>
                                </div>

                            </div>
                            <?php }?>
                        </div>
            </div>
        </div>
    </div>
        <div class="after-p">
            <p></p>
        </div>
    </section>
    <section id="form-comentarios">
        <div class="container">
            <div class="row">
                <div class="form-comentarios">
                    <div class="title-comment">
                        <h1>Comentarios</h1>
                    </div>
                    <form action="form-comment.php" method="post">

                        <div class="ajust-comment">
                            <label for="comentario">Comentario</label>
                            <textarea class="form-control" name="comentario" id="comentario" cols="30" rows="10"></textarea>
                        </div>
                        <div class="buttom-comment">
                            <input class="btn btn-success" type="submit" value="Enviar" name="enviar">
                            <input class="btn btn-danger" type="submit" value="Limpar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="comentarios">
        <div class="container">
            <div class="row">
                <div class="comentarios">
                    <?php foreach ($coments as $coment){?>
                        <div class="comment-name">
                            <h3><?=$coment['nome'];?></h3>
                        </div>
                        <div class="comment-content">
                            <p><?=$coment['comentario'];?></p><br>
                        </div>

                    <?php }?>
                </div>
            </div>
        </div>
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>
</html>
