<?php require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION["product"] as $count => $cookie): ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $count; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <p>count <?= $_SESSION["count"][$count] ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
