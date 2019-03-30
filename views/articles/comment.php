<div id="Fancy-lines-article" class="row">
    <div class="line m-auto">
        <img src="<?= URL ?>public/image/webzad-Fancy-lines-article.png" alt="webzad-Fancy-lines-article"
             class="img-fluid w-75 d-block m-auto ">
    </div>
</div>
<div id="comment_parameter" class="card mt-4 mb-3">
    <div class="row">
        <div class="col-lg-5">
            <div class="card-title">
                <p class="p-3"><i class="fas fa-chart-pie opacity-5"></i> امتیاز کاربران به مقاله :
                    <span class="d-sm-inline d-block"><?= $row['title']; ?></span>
                </p>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php foreach ($idCategory as $row) { ?>
                        <p class="col-sm-5 font-small p-0"><?= $row['title']; ?></p>
                        <ul class="col-sm-7 score list-inline p-0 d-flex align-items-center justify-content-center">
                            <li>
                                <span class="bg-dark h-100 d-block"></span>
                            </li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card-body">
                <div class="card-title pt-3 h5 pb-3">شما هم می‌توانید در مورد این مقاله نظر بدهید.</div>
                <div class="card-text font-small">برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید.</div>
                <a class="btn btn-outline-secondary m-3 p-2 font-small" role="button" aria-pressed="true">افزودن نظر
                    جدید</a>
            </div>
        </div>
    </div>
</div>
<div id="userComment" class="card mt-3">
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
                <div class="col-lg-4 mt-3 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <?php foreach ($idCategory as $row) { ?>
                            <p class="col-sm-5 font-small p-0"><?= $row['title']; ?></p>
                            <ul class="col-sm-7 score list-inline p-0 d-flex align-items-center justify-content-center">
                                <li>
                                    <span class="bg-dark h-100 d-block"></span>
                                </li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>


                        <?php } ?>
                    </div>
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
