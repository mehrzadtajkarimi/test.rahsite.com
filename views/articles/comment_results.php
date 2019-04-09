
<?php
$comments = $data['comments'];
$commentParameterName = $data['commentParameterName'];

foreach ($comments as $comment) { ?>
    <div id="userComment" class="card mt-3">
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
                        <?php
                        $scores = unserialize($comment['parameter']);
                        foreach ($commentParameterName as $parameter) {
                            $parameterId = $parameter['id'];
                            $score = $scores[$parameterId];
                            ?>
                            <p class="col-sm-5 font-small p-0"><?= $parameter['title']; ?></p>
                            <ul class="col-sm-7 score list-inline p-0 d-flex align-items-center justify-content-center">
                                <?php for ($i = 0; $i < $score; $i++) { ?>
                                    <li>
                                        <span class="bg-gray h-100 d-block"></span>
                                    </li>
                                <?php } ?>
                                <?php for ($i = 0; $i < 5 - $score; $i++) { ?>
                                    <li></li>
                                <?php } ?>
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
    </div>
        <?php } ?>