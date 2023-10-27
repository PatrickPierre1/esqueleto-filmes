<?php 
    include "header.php";
    include "dados.php";
    
    $id = $_GET["id"];
?>

<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?=$filmes[$id]["imagem"]?>" alt="<?=$filmes[$id]["nome"]?>">
        </div>
        <div class="coluna">
            <h2 style="color: #FFF" ><?= $filmes[$id]["nome"]?></h2>
            <p style="color: #FFF" > Idade indicada: <?= $filmes[$id]["idade"]?></p>
        </div>
    </div>
</main>

<?php 
    include "footer.php";
?>
