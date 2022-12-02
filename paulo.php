<?php 
include_once './includes/_header.php';
?>
<main>
    <body>
        <div class="mediaplay">
            <span class="top-vid">
                <h3>Duração: 6:31 min</h3>
                <h1>Cora, é o Paulo</h1>
                <h2>Ano - 2022</h2>
            </span>
            <div class="synopsis">
                <h2>Sinopse</h2>
                <p>Zeca, depois de anos trabalhando no mesmo lugar, decide procurar algo novo e busca um emprego que possa cuidar de idosos, mas o que ele não sabe, é que quem ele irá cuidar, pode ser misterioso e até mesmo perigoso.</p>
            </div>
            <span class="back-bottom">
                <a href="main.php"><img src="./img/seta.png" alt=""></a>
                <a href="main.php"><h3>Voltar</h3></a>
            </span>
            <div class="media">
                <video controls loop width="880px" height="500px">
                    <source src="./img/paulo.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </body>
</main>
<?php 
    include_once './includes/_footer.php';
?>