<?php
require ('views/admin/menu_right.php');
$adminCategory = $data['adminCategory'];
?>
<div class="col-lg-10">
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">عنوان دسته</th>
                <th scope="col">انتخاب</th>

            </tr>
        </thead>
        <?php foreach ($adminCategory as $row) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $row['id']-1 ?></th>
                    <td><?= $row['title'] ?></td>
                    <td><input type="checkbox"></td>

                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
</div><!-- div container to file menu_right -->

