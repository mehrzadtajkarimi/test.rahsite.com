<section id="nemonekar">
  <div class="container">
    <div class="row mt-3 mb-3">
      <div class="col-12">
        <P class="text-center">جدیدترین وبسایت های طراحی شده</P>
      </div>
    </div>
    <div class="row">
      <div id="company" class="col-md-4 d-flex justify-content-center  m-md-0 m-sm-2">
        <div class="row">
          <div class="Type-design">
            <div class="Type-design-template">
              <div class="flip-box bg-transparent cursor-pointer">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <span class="d-flex justify-content-center"><i class="fas fa-7x fa-building p-3 "></i></span>
                    <p class="text-center font-small"> سایت شرکتی</p>
                  </div>
                  <div class="flip-box-back d-flex justify-content-center">
                    <img src="public\image\Type-design-company.jpg" alt="contract_management" >
                  </div>
                </div>
              </div>
            </div>
            <div class="Type-design-presentation mb-5 d-none">
              <div id="image_zoom">
                <?php foreach ($data as $row) { ?>
                  <div class="col-lg-3 col-md-6  d-flex justify-content-center mb-3">
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
            </div>
          </div>
        </div>
      </div>
      <div id="Store" class="col-md-4 d-flex justify-content-center  m-md-0 m-sm-2">
        <div class="row">
          <div class="Type-design">
            <div class="Type-design-template">
              <div class="flip-box bg-transparent cursor-pointer">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <span class="d-flex justify-content-center"><i class="fas fa-7x fa-shopping-cart p-3 "></i></span>
                    <p class="text-center font-small">سایت فروشگاهی</p>
                  </div>
                  <div class="flip-box-back d-flex justify-content-center">
                    <img src="public\image\Type-design-Store.jpg" alt="contract_management" >
                  </div>
                </div>
              </div>
            </div>
            <div class="Type-design-presentation mb-5 d-none">
              <div id="image_zoom">
                <?php foreach ($data as $row) { ?>
                  <div class="col-lg-3 col-md-6  d-flex justify-content-center mb-3">
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
            </div>
          </div>
        </div>
      </div>
      <div id="Personal" class="col-md-4 d-flex justify-content-center  m-md-0 m-sm-2">
        <div class="row">
          <div class="Type-design">
            <div class="Type-design-template">
              <div class="flip-box bg-transparent cursor-pointer">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <span class="d-flex justify-content-center"><i class="fas fa-7x fa-user-tie p-3 "></i></span>
                    <p class="text-center font-small">سایت شخصی</p>
                  </div>
                  <div class="flip-box-back d-flex justify-content-center">
                    <img src="public\image\Type-design-personal.jpg" alt="contract_management" >
                  </div>
                </div>
              </div>
            </div>
            <div class="Type-design-presentation mb-5 d-none">
              <div id="image_zoom">
                <?php foreach ($data as $row) { ?>
                  <div class="col-lg-3 col-md-6  d-flex justify-content-center mb-3">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
