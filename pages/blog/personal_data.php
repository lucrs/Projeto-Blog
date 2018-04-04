<?php
session_start();

require_once '../../DB/init.php';

require '../../DB/check.php';

?>


<!doctype html>
<html lang="pt-br">
<head>
    <title>Painel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/painel.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
</head>
<body>
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="painel.php">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li><a href="blog.php">Entrar Blog<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fas fa-sign-in-alt"></i></span></a></li>
                <li ><a href="personal_data.php">Meus Dados<span style="font-size:16px;" class="pull-right hidden-xs showopacity "><i class="fas fa-user"></i></span></a></li>
                <li ><?php echo'<a href="../logout.php?token='.md5(session_id()).'">Sair<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fas fa-times-circle"></i></span></a>'?></li>

            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="personal-data">
               <h1>Dados Pessoais</h1>
                <form action="">
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="user_name">Nome</label>
                            <input type="text" class="form-control" id="user_name" value="<?=$_SESSION['user_name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="user_email">E-Mail</label>
                            <input type="text" class="form-control" id="user_email" value="<?=$_SESSION['user_email'];?>">
                        </div>
                        <div class="form-group">
                            <label for="user_phone">Telefone</label>
                            <input type="text" class="form-control" id="user_phone" value="<?=$_SESSION['user_phone'];?>">
                        </div>
                        <div class="form-group">
                            <label for="user_cpf">CPF</label>
                            <input type="text" class="form-control" id="user_cpf" value="<?=$_SESSION['user_cpf'];?>">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
</body>
</html>