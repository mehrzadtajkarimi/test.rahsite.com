<?php foreach ($data as $row) { ?>
    <div class="card border-0 shadow-sm mb-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title font-face"><?= $row['title']; ?></h5>
                    <p class="card-text"><?= $row['summary']; ?></p>
                    <a href="<?= URL ?>article/index/<?= $row['id']; ?>" type="button" class="btn btn-outline-info">
                        ادامه مطالب</a>
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