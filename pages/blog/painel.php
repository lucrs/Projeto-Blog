<?php
session_start();

require_once '../../DB/init.php';

require '../../DB/check.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Painel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/painel.css">

</head>
<body>
<?php if ($_SESSION['user_nivel'] == '1'){?>

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
                <li ><a href="blog.php">Entrar Blog<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fas fa-sign-in-alt"></i></span></a></li>
                <li ><a href="add-post.php">Criar Posts<span style="font-size:16px;" class="pull-right hidden-xs showopacity "><i class="fas fa-file-alt"></i></span></a></li>
                <li ><a href="edit-post.php">Editar Posts<span style="font-size:16px;" class="pull-right hidden-xs showopacity "><i class="fas fa-edit"></i></span></a></li>
                <li ><?php echo'<a href="../logout.php?token='.md5(session_id()).'">Sair<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fas fa-times-circle"></i></span></a>'?></li>
            </ul>
        </div>
    </div>
</nav>
<?php } else{?>
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

<?php } ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="panel-index">
                    <h1>Bem Vindo</h1>
                    <p><span><?php echo $_SESSION['user_name'];?>.</span></p>
                </div>
            </div>
        </div>

    </section>
</main>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="../../js/jquery-3.3.1.min.js"></script>
</body>
</html>