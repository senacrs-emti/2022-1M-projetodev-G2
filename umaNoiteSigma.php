<?php 
include_once './includes/_header.php';
?>
<main>
    <body>
        <div class="mediaplay">
            <span class="top-vid">
                <h3>Duração: 4:49 min</h3>
                <h1>Uma Noite Sigma</h1>
                <h2>Ano - 2022</h2>
            </span>
            <div class="synopsis">
                <h2>Sinopse</h2>
                <p>Em uma tentativa de diminuir a criminalidade, o governo atual permite quedurante uma noite inteira todos os crimes sejam liberados. Quatro estudantesdividindo uma república passam pelos piores momentos de suas vidas pornão se atentarem às defesas de sua moradia nesse momento tão perigoso.</p>
            </div>
            <span class="back-bottom">
                <a href="main.php"><img src="./img/seta.png" alt=""></a>
                <a href="main.php"><h3>Voltar</h3></a>
            </span>
            <div class="media">
                <video controls loop width="880px" height="500px">
                    <source src="./img/umaNoiteSigma.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </body>
</main>
<?php 
    include_once './includes/_footer.php';
?>