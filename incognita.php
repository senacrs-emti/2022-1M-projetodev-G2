<?php 
include_once './includes/_header.php';
?>
<main>
    <body>
        <div class="mediaplay">
            <span class="top-vid">
                <h3>Duração: 4:18 min</h3>
                <h1>Incógnita</h1>
                <h2>Ano - 2022, Por Paulo Estevan, Sheron Franco, Patrícia Marcante, Bianca Figueiredo Rodrigues, Maria Fernanda Borba.</h2>
            </span>
            <div class="synopsis">
                <h2>Sinopse</h2>
                <p>Depois de ficar sozinho em casa, um jovem passa uma noite tediosa no local. Ele só não esperava que, repentinamente, tudo mudasse, quando algo na imensidão do lugar começa a aterrorizá-lo.</p>
            </div>
            <span class="back-bottom">
                <a href="main.php"><img src="./img/seta.png" alt=""></a>
                <a href="main.php"><h3>Voltar</h3></a>
            </span>
            <div class="media">
                <video controls loop width="880px" height="500px">
                    <source src="./img/incognita.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </body>
</main>
<?php 
    include_once './includes/_footer.php';
?>