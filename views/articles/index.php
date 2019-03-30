<?php
$article = $data['article'];
$categorizeArticles = $data['categorizeArticles'];
$mostView = $data['mostView'];
$newArticle = $data['newArticle'];
$idCategory = $data['idCategory'];
$comments = $data['comments'];
?>
<div id="article" class="container mt-5">
    <div class="row">
        <?php foreach ($article as $row) { ?>
            <section class="content col-lg-8 pt-3">
                <header>
                    <div class="header-main ">
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
                            <img src="<?= URL ?>public/image/<?= $row['image_small']; ?>"
                                 alt="<?= $row['image_small']; ?>" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="card-text text-justify line-height-2">
                                <?= $row['long_description']; ?>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        <?php } ?>
        <?= require_once('leftSidebar.php'); ?>
    </div>
    <?= require_once('comment.php'); ?>
</div>
