<?php
$article = $data['article'];
$categorizeArticles = $data['categorizeArticles'];
$mostView = $data['mostView'];
$newArticle = $data['newArticle'];
$idCategory = $data['idCategory'];
$comments = $data['comments'];
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
    <div id="Fancy-lines-article" class="row">
        <div class="line m-auto">
            <img src="<?= URL ?>public/image/webzad-Fancy-lines-article.png" alt="webzad-Fancy-lines-article"
                 class="img-fluid w-75 d-block m-auto ">
        </div>
    </div>
    <div id="comment_parameter" class="card mt-4 mb-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-body">
                    <div class="card-title">
                        <p class=""><i class="fas fa-chart-pie opacity-5"></i> امتیاز کاربران به مقاله :
                            <span class="d-sm-inline d-block"><?= $row['title']; ?></span>
                        </p>
                    </div>
                    <div class="card-body">
                        <?php foreach ($idCategory as $row) { ?>


                            <p><?= $row['title']; ?></p>
                            <div class="progress">
                                <div class="progress-bar bg-gray" role="progressbar" style="width: 25%;"
                                     aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="100">25%
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-body">
                    <div class="card-title pt-3 h5 pb-3">شما هم می‌توانید در مورد این مقاله نظر بدهید.</div>
                    <div class="card-text font-small">برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید.</div>
                    <a class="btn btn-outline-secondary m-3 p-2 font-small" role="button" aria-pressed="true">افزودن نظر
                        جدید</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <?php foreach ($comments as $comment) { ?>
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 ">
                        <span class="d-inline d-lg-block  p-2 ">اسم شخص</span>
                        <span class="pr-2">2019/10/22</span>
                    </div>
                    <div class="col-lg-6 m-auto ">
                        <p class="float-right p-2">آیا این نظر مفید بود ؟</p>
                        <div class="btn-group d-flex flex-row-reverse pl-md-4" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary pr-4 pl-4">
                                <i class="fas fa-thumbs-down"></i> <?= $comment['dislikeCount']; ?>
                            </button>
                            <button type="button" class="btn btn-secondary pr-4 pl-4">
                                <i class="fas fa-thumbs-up"></i> <?= $comment['likeCount']; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <?php foreach ($idCategory as $row) { ?>
                        <p><?= $row['title']; ?></p>
                        <div class="progress">
                            <div class="progress-bar bg-gray" role="progressbar" style="width: 25%;"
                                 aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="col-lg-8 card bg-light mt-3">
                    <div class="card-title pt-3">
                        <p><?= $comment['title']; ?></p>
                    </div>
                    <div class="card-text">
                        <p><?= $comment['comment']; ?></p>
                    </div>
                </div>
            </div>

        </div>
        <?php } ?>
    </div>

</div>



