<?php 
include_once './includes/_header.php';
?>
<main>
    <body>
        <div class="mediaplay">
            <span class="top-vid">
                <h3>Duração: 10:41 min</h3>
                <h4>Documentario do Elon Musk</h1>
                <h2>Ano - 2022, Por Yasser, Gustavo Freitas, Gabriel Brandolt, Pablo, Arthur Mello, Johan.</h2>
            </span>
            <div class="synopsis">
                <h2>Sinopse</h2>
                <p>Um documentário sobre a incrivel e desafiadora historia do atual homemmais rico do mundo, Elon Musk.</p>
            </div>
            <span class="back-bottom">
                <a href="main.php"><img src="./img/seta.png" alt=""></a>
                <a href="main.php"><h3>Voltar</h3></a>
            </span>
            <div class="media">
                <video controls loop width="880px" height="500px">
                    <source src="./img/elonmusk.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </body>
</main>
<?php 
    include_once './includes/_footer.php';
?>