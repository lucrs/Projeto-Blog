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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="blog.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">

                </li>
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="w3-container">
    <?php foreach ($result as $row){ ?>
        <div class="w3-card-4 col-xs-12" >

            <div class="row">
                <div class="title-blog">
                    <h1><?=$row['titulo']?></a></h1>
                </div>

                <di class="row">
                    <div class="conteudo-single col-xs-10">
                        <div class="col-xs-12">
                            <p><?=$row['conteudo']?></p>
                        </div>

                    </div>
                </di>



            </div>
        </div>
    <?php }?>
</div>




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
