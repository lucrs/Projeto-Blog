<?php
session_start();

require_once '../DB/init.php';

require '../DB/check.php';

?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Painel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/painel.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
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
                <li><a href="blog.php">Entrar Blog<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fas fa-sign-in-alt"></i></span></a></li>
                <li><a href="add-post.php">Criar Posts<span style="font-size:16px;" class="pull-right hidden-xs showopacity "><i class="fas fa-file-alt"></i></span></a></li>
                <li><a href="edit-post.php">Editar Posts<span style="font-size:16px;" class="pull-right hidden-xs showopacity "><i class="fas fa-edit"></i></span></a></li>
                <li><?php echo'<a href="logout.php?token='.md5(session_id()).'">Sair<span style="font-size:16px;" class="pull-right hidden-xs showopacity"><i class="fas fa-times-circle"></i></span></a>'?></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="add-post">
                    <h1>Adicionar Post</h1>
                </div>
                <form action="save-add.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Digite o titulo...">
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" class="form-control" name="autor" id="autor" placeholder="Digite o autor">
                    </div>
                    <div class="form-group">
                        <label for="img">Imagem</label>
                        <input type="file" class="form-control" name="img" id="img" >
                    </div>
                    <div class="form-group">
                         <textarea name="editor-text" id="editor-text" rows="10" cols="80">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-danger" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php } else{ ?>
        <section id="not-authorized">
            <div class="container">
                <div class="row">
                    <div class="not-authorized">
                        <h1>Voce não tem permissão para acessar essa pagina</h1>
                        <div class="back-index">
                           <a href="/" class="btn btn-danger">Voltar pro inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php }?>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/ckeditor/ckeditor.js"></script>
<script src="../js/ckeditor.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
</body>
</html>