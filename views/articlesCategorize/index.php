<?php

$articles = $data['articles'];
?>
<section id="articles">
    <div class="container mt-5 ">
        <div class="row">
            <div id="widget-categories" class="col-md-3 pt-4">
                <i class="fas fa-tasks"></i>
                <p class="font-face3 font-sizs-15  d-inline pr-3 text-dark">دسته بندی مقالات</p>
                <ul class="mt-2">
                    <li class="p-1 list-style-type-none cursor-pointer">
                        <a class="text-dark font-small">
                            <i class="fas fa-pen-square ml-1"></i>
                            طراحی سایت</a>
                    </li>
                    <li class="p-1 list-style-type-none cursor-pointer">
                        <a class="text-dark font-small">
                            <i class="fas fa-pen-square ml-1"></i>
                            بهینه سازی سایت</a>
                    </li>
                </ul>
            </div>
            <div id="text-categories" class="col-md-9 pt-4">
                <div class="ajax-categories">
                    <div class="card shadow border-0 rounded" >
                    <p class="text-center font-face2 font-sizs-20 p-5 ">((لطفا دسته بندی مورد نظر را انتخواب نمایید.))</p>
                    </div>
                </div>
                <div class="ajax-categories">

                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$("#articles #widget-categories ul li").click(function () {
    $("#text-categories .ajax-categories").stop().fadeOut(0);

    var index = $(this).index();
    var section_selected = $("#text-categories .ajax-categories").eq(index);

    var url = '<?= URL?>articlesCategorize/tab';
    var data = {'number': index};

    $.post(url, data, function (msg) {
        section_selected.html(msg);
    });
    section_selected.fadeIn(500);
  });

</script>
