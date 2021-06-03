<?php
$comment_question = $data['comment_question'];
$comment_answer = $data['comment_answer'];
?>
<div class="container">
    <div class="row">
        <div class="card-body">
            <div class="card-title pr-4  font-face2 font-sizs-20">
                پرسش خود را مطرح نمایید
            </div>
            <div class="card p-4 text-justify">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام

            </div>
            <div class="d-block w-100 ">
                <a href="" class="btn btn-outline-secondary pr-5 pl-5 m-4 float-left" role="button" aria-pressed="true">ثبت نظر</a>
            </div>
        </div>
    </div>
    <hr class="w-75  d-block m-auto p-2">
    <?php foreach ($comment_question as $value) {
        ?>
        <div class="card-body">
            <div class="row">
                <div class="card-body p-1">
                    <div class="card" role="alert">
                        <div class="card-header ">
                            <div class="float-right">
                                <i class="fas fa-question-circle"></i>
                                <span>پرسش</span>
                            </div>
                            <div class="float-left">
                                <span class="pl-2">اسم شخص</span>
                                <i class="fas fa-calendar-plus"></i>
                                <span class="pr-1"><?= $value['date'] ?></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $value['comment'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-body p-1 mr-2">
                    <div class="card  bg-light" role="alert">
                        <div class="card-header ">
                            <div class="float-right">
                                <i class="fas fa-comment"></i>
                                <span>پاسخ</span>
                            </div>
                            <div class="float-left">
                                <span class="pl-2">اسم شخص</span>
                                <i class="fas fa-calendar-check"></i>
                                <span class="pr-1"><?= $comment_answer[$value['id']]['date']; ?></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $comment_answer[$value['id']]['comment']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>