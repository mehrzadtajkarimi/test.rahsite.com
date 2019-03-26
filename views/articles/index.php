<?php
$article = $data['article'];
$categorizeArticles = $data['categorizeArticles'];
$mostView=$data['mostView'];
$newArticle=$data['newArticle'];
?>
<div class="container mt-5">
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
        <section class="leftSidebar col-lg-4 pt-3 ">
            <div id="Related_articles" class="mb-5 mt-2">
                <strong class="font-small text-muted ">مقالات مرتبط <i class="fa fa-bookmark"></i>
                </strong>
                <hr>
                <ul class=" pt-3">
                    <?php foreach ($categorizeArticles as $row) { ?>
                        <ol>
                            <a href="<?= URL ?>article/index/<?= $row['id']; ?>"
                               class="text-muted nav-link a text-center d-flex justify-content-center ">
                                <?= $row['title']; ?>
                            </a>
                        </ol>
                    <?php } ?>
                </ul>
            </div>
            <div id="Most_viewed" class="mb-5 mt-2">
                <strong class="font-small text-muted ">پربازدیدترین ها <i class="fas fa-chart-line"></i>
                </strong>
                <hr>
                <ul class=" pt-3">
                    <?php foreach ($mostView as $row) { ?>
                        <ol>
                            <a href="<?= URL ?>article/index/<?= $row['id']; ?>"
                               class="text-muted nav-link a text-center d-flex justify-content-center ">
                                <?= $row['title']; ?>
                            </a>
                        </ol>
                    <?php } ?>
                </ul>
            </div>
            <div id="newArticle" class="mb-5 mt-2">
                <strong class="font-small text-muted ">جدید ترین ها <i class="far fa-newspaper"></i>
                </strong>
                <hr>

                <ul class=" pt-3">
                    <?php foreach ($newArticle as $row) { ?>
                        <ol>
                            <a href="<?= URL ?>article/index/<?= $row['id']; ?>"
                               class="text-muted nav-link a text-center d-flex justify-content-center ">
                                <?= $row['title']; ?>
                            </a>
                        </ol>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>
</div>

