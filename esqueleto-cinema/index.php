<?php 
    include "header.php";
    include "dados.php";

?>

<main>
    <h1 style="color: #FFF;">Filmes em Cartaz</h1>
    <div class="grid">
        <?php
            $i = 1;
            shuffle($filmes);
            foreach ($filmes as $filme) {

        ?>
            <div class="coluna">
                <img src="imagens/<?= $filme["imagem"] ?>" alt="<?=$filme["nome"]?>">
                <p>
                    <strong>
                        <?=$filme["nome"] ?>
                    </strong>
                    <br>

                    Idade indicada<i> <?= $filme["idade"] ?></i>
                </p>

                <p>
                    <a class="details" href="produto.php?id=<?=$filme["id"]?>">Detalhes</a>
                </p>
            </div>

        <?php
            $i++;
            if($i > 4) break;
            
            }
        ?>
    </div>
</main>

<?php 
    include "footer.php";
?>