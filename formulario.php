<?php
       $sql = "SELECT * FROM usuario";
       
       if(isset($_POST['submit'])) {

            include_once 'config.php';

            $nome = $_POST['email'];
            $email = $_POST['nome'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO `usuario`( `email`, `nome`, `senha`) VALUES ('".$email."' , '".$nome."' , '".$senha."')";
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <title>Document</title>
</head>
<body>
    <section class="pgn">
        <form action="formulario.php" method="POST">
            <section class="login">
                <div class="imagem1">
                    <img src="./img/icon.png" alt="icon" height="50.5em" width="50em">
                </div>
                    <div class="forms">
                        <h2>Create account!</h2>
                        <div class="nome">
                            <h3>Name</h3>
                            <input type="text" id="nome" name="nome" required placeholder="Enter your name">
                            <label for="nome"></label>
                        </div>
                        <div class="nome">
                            <h3>E-mail</h3>
                            <input type="text" id="email" name="email" required placeholder="Enter your e-mail">
                            <label for="email"></label>
                        </div>
                        <div class="nome">
                            <h3>Password</h3>
                            <input class="senha" type="password" id="senha" name="senha" required placeholder="Enter your password">
                            <label for="senha"></label>
                        </div>
                        <input class="botao" type="submit" id="subBotao" name="subBotao" value="Create ➜">
                    </div>
                </section>
            </section>
        </form>
        <script src="./assets/js/script.js"></script>
    </body>
</html>