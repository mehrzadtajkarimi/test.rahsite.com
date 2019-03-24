<?php
$result  =$data['article'];
$timeLogs=$data['timeLogs'];
foreach ($result as $row) {
    ?>
    <div class="card border-0 shadow-sm mb-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title font-face"><?= $row['title']; ?></h5>
                    <p class="card-text"><?= $row['summary']; ?></p>
                    <a href="<?= URL ?>article/index/<?= $row['id']; ?>" type="button" class="btn btn-outline-secondary mt-4">
                        ادامه مطالب</a>



                    <div class="blog-date float-left text-muted pl-3 pb-3 ">
                        <div class="date ">
                            <div class="date-cont">
                                <span class="day"><?= $timeLogs['day'] ?></span>
                                <span class="month"><span class="text-center"><?= $timeLogs['months'] ?></span></span>
                                <span class="year"><?= $timeLogs['year'] ?></span>
                                <i class="springs"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <img src="public\image\<?= $row['image_small']; ?>" class="img-fluid "
                     alt="site-design-2"
                     title="site-design-2">
            </div>

        </div>

    </div>
<?php } ?>

