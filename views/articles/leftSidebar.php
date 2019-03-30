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
