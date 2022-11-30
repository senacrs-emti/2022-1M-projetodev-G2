<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="pgn">
        <section class="login">
            <div class="imagem1">
                <img src="./img/icon.png" alt="icon" height="70px" width="70px">
            </div>
            <div class="forms">
                <h2>SenacFlix</h2>
                <h4>Sign in to your account</h4>
                <div class="nome">
                    <h3>Name</h3>
                    <label for="txtUser"></label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="nome">
                    <h3>Password</h3>
                    <label for="pasSenha"></label>
                    <input class="senha" type="password" id="senha" name="senha" required placeholder="Enter password">
                    <button onclick="myFunction()">Show Password</button>
                </div>
                <div class="options">
                    <a href="#">forget password?</a>
                </div>
                    <center><input class="botao" type="submit" id="subBotao" name="subBotao" value="Sign in ➜"></center>
                </div>
        </section>
    </section>
 <script src="script.js"></script>
</body>
</html>