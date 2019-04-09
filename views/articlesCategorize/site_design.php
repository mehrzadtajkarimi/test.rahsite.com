<?php
$article = $data['articles'];
$timeLogs = $data['timeLogs'];
foreach ($article as $row) {
    ?>
    <div class="card border-0 shadow-sm mb-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title font-face"><?= $row['title']; ?></h5>
                    <p class="card-text"><?= $row['summary']; ?></p>
                    <a type="button"  class="btn btn-outline-secondary mt-4"
                       href="<?= URL ?>article/index/<?= $row['id']; ?>/<?= $row['id_articles_category']; ?>" >
                        ادامه مطالب
                    </a>
                    <div class="blog-date float-left text-muted pl-3 pb-3 ">
                        <div class="date ">
                            <div class="date-cont">
                                <span class="day"><?= $timeLogs['day']; ?></span>
                                <span class="month"><span class="text-center"><?= $timeLogs['months']; ?></span></span>
                                <span class="year"><?= $timeLogs['year']; ?></span>
                                <i class="springs"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="public\image\<?= $row['image_small']; ?>" class="img-fluid"
                     alt="<?= $row['image_small']; ?>"
                     title="<?= $row['image_small']; ?>">
            </div>
        </div>
    </div>
<?php } ?>
