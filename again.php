<?php 
include_once './includes/_header.php';
?>
<main>
    <body>
        <div class="mediaplay">
            <span class="top-vid">
                <h3>Duração: 7:18 min</h3>
                <h1>Again</h1>
                <h2>Ano - 2022, Por Mateus Pinho e Giovanna Pandolfo</h2>
            </span>
            <div class="synopsis">
                <h2>Sinopse</h2>
                <p>Um cara com uma vida depressiva e rotineira consegue uma forma de mudartudo de uma hora para outra.</p>
            </div>
            <span class="back-bottom">
                <a href="main.php"><img src="./img/seta.png" alt=""></a>
                <a href="main.php"><h3>Voltar</h3></a>
            </span>
            <div class="media">
                <video controls loop width="880px" height="500px">
                    <source src="./img/again.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </body>
</main>
<?php 
    include_once './includes/_footer.php';
?>