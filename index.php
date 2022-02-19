<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Tela de Login</title>
</head>
<body>
    <img  class="wave" src="wave2.png">
    <div class="container">
        <div class="img">
           <!-- <img src="#"> -->
        </div>
        <div class="login-container">
            <form action="logar.php" method="POST">
               <img class="avatar" src="img/user.png">
                <h2>Bem Vindo</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                        <div>
                            <h5>Usuário</h5>
                            <input class="input" type="text" name="usuario" id="usuario">
                        </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                        <div>
                            <h5>Senha</h5>
                            <input class="input" type="password" name="senha" id="senha">
                        </div>
                </div>
                <a href="#"> Esqueceu a senha ?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>