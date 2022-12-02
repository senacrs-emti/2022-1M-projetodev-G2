<?php 
include_once './includes/_header.php';
?>
<main>
    <body>
        <div class="mediaplay">
            <span class="top-vid">
                <h3>Duração: 6:35 min</h3>
                <h1>Vozes</h1>
                <h2>Ano - 2022, Por Raul Rodrigues, Saria Dorneles, Leonardo Mentz, Érick Netto, Gabriel Zeferino, Cauan Todeschini.</h2>
            </span>
            <div class="synopsis">
                <h2>Sinopse</h2>
                <p>A história sobre um homem que decide se mudar para uma nova casa emPorto Alegre em busca de recomeçar a vida, porém as coisas começam aficar estranhas desde quando ele começa a se gravar em alguns dias dassuas semanas.</p>
            </div>
            <span class="back-bottom">
                <a href="main.php"><img src="./img/seta.png" alt=""></a>
                <a href="main.php"><h3>Voltar</h3></a>
            </span>
            <div class="media">
                <video controls loop width="880px" height="500px">
                    <source src="./img/vozes.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </body>
</main>
<?php 
    include_once './includes/_footer.php';
?>