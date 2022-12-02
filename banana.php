<?php 
include_once './includes/_header.php';
?>
<main>
    <body>
        <div class="mediaplay">
            <span class="top-vid">
                <h3>Duração: 3:43 min</h3>
                <h1>Banana</h1>
                <h2>Ano - 2022</h2>
            </span>
            <div class="synopsis">
                <h2>Sinopse</h2>
                <p>Um filme para entusiastas em bananas.</p>
            </div>
            <span class="back-bottom">
                <a href="main.php"><img src="./img/seta.png" alt=""></a>
                <a href="main.php"><h3>Voltar</h3></a>
            </span>
            <div class="media">
                <video controls loop width="880px" height="500px">
                    <source src="./img/banana.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </body>
</main>
<?php 
    include_once './includes/_footer.php';
?>