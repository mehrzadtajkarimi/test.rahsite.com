<div id="Fancy-lines-article" class="row">
    <div class="line m-auto">
        <img src="public/image/webzad-Fancy-lines-article.png" alt="webzad-Fancy-lines-article"
             class="img-fluid w-75 d-block m-auto ">
    </div>
</div>
<div id="comment_parameter" class="card mt-4 mb-3">
    <div class="row">
        <div class="col-lg-5">
            <div class="card-title">
                <p class="p-3"><i class="fas fa-chart-pie opacity-5"></i> امتیاز کاربران به مقاله :
                    <span class="d-sm-inline d-block"></span>
                </p>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php foreach ($commentCategory as $row) { ?>
                        <p class="col-sm-5 font-small "><?= $row['title']; ?></p>

                        <ul class="col-sm-7 score list-inline p-0 d-flex align-items-center justify-content-center">
                            <li>
                                <span class="bg-gray h-100 d-block"></span>
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
