<?php require 'inc/head.php';
require 'inc/data/products.php';
/*echo '<pre>';
var_dump($_SESSION);
echo '</pre>';*/
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $count => $cookie) { ?>
                <?php $cookieStock = $count - $_SESSION["count"][$count]; ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $count; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <?php if ($cookieStock <= 0) : ?>
                            <p class="text-danger">Sold out!!!</p>
                        <?php else: ?>
                            <p>count <?= $cookieStock ?></p>
                            <form action="session.php" method="post">
                                <?php if (isset($_SESSION['username'])) : ?>
                                    <input type="hidden" name="add_to_cart" value="<?= $count ?>">
                                    <input type="hidden" name="cart_cookie_count" value="Plus" />
                                <?php endif; ?>
                                <input type="hidden" name="loginname" value=" <?= $_SESSION['username'] ?>">
                                <button class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                                </button>
                            </form>
                        <?php endif; ?>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
