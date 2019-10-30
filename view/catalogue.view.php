<?php
$catalogue = true;
?>

<article class="catalogue">
    <?php foreach ($datas as $article) : ?>
        <div class="fichearticle">
            <h2 class="titrearticle"><?php echo $article['designation'] ?></h2>
            <div class="detailproduit">
                <div class="descriptionarticle">
                    <?php echo $article['description'] ?>
                </div>
                <div class="prix">
                    <?php echo $article['price'] . "€" ?>
                </div>
                <div class="form">
                    <form action="../pages/panier.php" method="post">
                        <label for=""></label>
                        <label for="quantity">Quantité</label>
                        <input type="hidden" value="<?php echo $article['designation']; ?>" name="designation">
                        <input type="hidden" value="<?php echo $article['ref']; ?>" name="ref">
                        <input type="hidden" value="<?php echo $article['price']; ?>" name="price">
                        <input type="number" min="1" name="quantity" value="1" required>
                        <button type="submit" value="valider">Ajouter au panier</button>
                    </form>
                </div>
            </div>
            <div class="article">
                <img src="<?php echo $article['image'] ?>" alt="<?php echo $article['ref'] ?>">
            </div>
        </div>
    <?php endforeach; ?>
</article>