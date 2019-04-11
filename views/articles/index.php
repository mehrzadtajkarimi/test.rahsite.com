<?php
$article_fetchAll = $data['article_fetchAll'];
$article_fetch = $data['article_fetch'];
$articlesCategorize = $data['articlesCategorize'];
$mostView = $data['mostView'];
$newArticle = $data['newArticle'];
$commentParameterName = $data['commentParameterName'];
$commentParameterScores = $data['commentParameterScores'];
$commentCount=$data['commentCount'];
?>
<div id="article" class="container mt-5">
    <div class="row">
        <?php foreach ($article_fetchAll as $row) { ?>
            <section class="content col-lg-8 pt-3">
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
        <?php require('leftSidebar.php'); ?>
    </div>
    <?php require('comment.php'); ?>
</div>
<script type="text/javascript">
    $("#nav-tab a").click(function () {
        $("#nav-tabContent .tab-pane").stop().fadeOut(0);

        var index = $(this).index();
        var section_selected = $("#nav-tabContent .tab-pane").eq(index);

        var url = '<?= URL ?>article/tab/<?= $article_fetch['id'] ;?>/<?= $article_fetch['id_articles_category'] ;?>';
                var data = {'number': index};

                $.post(url, data, function (msg) {
                    section_selected.html(msg);
                });
                section_selected.fadeIn(200);
            });

</script>
