        <div id="image_zoom" class="row">
          <?php foreach ($data as $row) { ?>
            <div class="col-lg-3 col-md-6  d-flex justify-content-center  mb-3">
              <figure>
                <a href="<?= $row['link']; ?>" class="d-block overflow-hidden rounded">
                  <img src="<?= $row['img']; ?>" class="img-fluid " alt="Macbook">
                </a>
                <figcaption>
                  <p class="text-center"><?= $row['name']; ?></p>
                </figcaption>
              </figure>
            </div>
          <?php } ?>
        </div>
