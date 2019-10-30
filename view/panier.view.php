<article>
    <form action="../pages/order.php" method="POST" id="cartform">
        <table id="order">
            <div id="ordertitle">Votre commande</div>
            <tr>
                <td>Désignation article</td>
                <td>Reférence</td>
                <td>Prix Unitaire</td>
                <td>Quantité</td>
                <td>Total par article</td>
            </tr>
                <?php foreach ($cart as $item) : ?>
                    <tr>
                        <td><?= $item['designation']; ?></td>
                        <td><?= $item['ref']; ?></td>
                        <td><?= $item['price']; ?> €</td>
                        <td><?= $item['quantity']; ?></td>
                        <td><?= ($item['quantity'] * $item['price']) . " €"; ?></td>
                        <?php $totalprice += ($item['quantity'] * $item['price']); ?>
                    </tr>
                <?php endforeach; ?>
        </table>
        <div id="totalorder">Total de la commande : <?php echo $totalprice; ?> €</div>
        <button type="submit" value="commander">Passer commande</button>
    </form>
</article>