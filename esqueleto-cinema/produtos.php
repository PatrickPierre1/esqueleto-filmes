<?php 
    include "header.php";
    include "dados.php";
?>
<main>
    <h1 style="color: #FFF;">Nossos filmes</h1>
    <div class="grid">
        <?php 
            foreach($filmes as $filme) {
        ?>
            <div class="coluna">
                <img src="imagens/<?= $filme["imagem"] ?>" alt="<?=$filme["nome"]?>">
                <p>
                    <strong>
                        <?=$filme["nome"] ?>
                    </strong>
                    <br>

                    Idade indicada: <i> <?= $filme["idade"] ?></i>
                </p>

                <p>
                    <a href="filme.php?id=<?=$filme["id"]?>">Detalhes</a>
                </p>
            </div>
        <?php 
            }
        ?>
    </div>
</main>

<?php 
    include "footer.php";
?>
