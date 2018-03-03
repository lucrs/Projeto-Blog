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
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<div class="container">
    <div class="row">

        <div class="login">
            <div class="avatar-user">
                <img src="img/avatar-user.png" alt="">
            </div>
            <div class="form">

                <h1>Login</h1>
                <form action="pages/login.php" method="post" autocomplete="off">
                    <div class="inner-addon-1">
                        <i class="fas fa-user"></i>
                    </div>
                    <input type="email"  class="email input-control form-control" placeholder="Entre com seu email" name="email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"
                           onBlur="this.setAttribute('readonly', true);"><br>
                    <label class="lb-email" for="email">E-mail*</label>
                    <div class="inner-addon-2">
                        <i class="fas fa-key"></i>
                    </div>
                    <input type="password" class="password input-control form-control" name="password" placeholder="Entre com sua senha" autocomplete="off"><br>
                    <label class="lb-password" for="password">Senha*</label>

                    <button class="button btn btn-success btn-lg">Logar</button>
                </form>
                <div class="sub-form">
                    <button class="btn btn-danger">Cadastrar</button>
                    <button class="btn btn-info">Esqueceu a senha</button>


                </div>

            </div>
        </div>
    </div>
</div>



<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


