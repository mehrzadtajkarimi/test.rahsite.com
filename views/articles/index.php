<div id="article" class="container mt-5">
    <div class="row">
        <?php foreach ($articles as $row) { ?>
        <article class="content col-lg-8 pt-3">
            <header>
                <div class="header-main">
                    <h1 class="h3">
                        <strong>
                            <?= $row['title']; ?>
                        </strong>
                    </h1>
                    <hr>
                </div>
            </header>
            <div class="content-main">
                <section id="content">
                    <h2 class="card-title h6 p-md-3 line-height-3">
                        <?= $row['short_description']; ?>
                    </h2>
                    <div class="card-img text-center">
                        <img src="<?= asset_url() ?>/assets/image/<?= $row['image_small']; ?>" alt="<?= $row['image_small']; ?>"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="card-text text-justify line-height-2">
                            <?= $row['long_description']; ?>
                        </div>
                    </div>
                </section>
            </div>
        </article>
        <?php } ?>
        <?php require('leftSidebar.php'); ?>
    </div>
    <?php require('comment.php'); ?>
</div>
