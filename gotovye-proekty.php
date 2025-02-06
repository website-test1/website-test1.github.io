<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- favicon -->
  <link rel="icon" href="favicon.ico" sizes="32x32" />
  <link rel="icon" href="favicons/favicon-64.svg" type="image/svg+xml" />

  <!--<link
			rel="icon"
			href="img/icons/favicon-logo-200.svg"
			type="image/svg+xml"
		/>
		<link rel="apple-touch-icon" href="img/icons/favicon-logo-180.png" />
		<link rel="manifest" href="favic.webmanifest" /> -->
  <!-- /*favicon -->

  <title>Мегаполис34-Готовые проекты</title>
  <link rel="stylesheet" href="assets/css/lightbox.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="wrapper">
    <header class="header header-page">
      <img class="header-img" src="assets/images/bg-header-glow.jpg" alt="" />
      <div class="container mb-5 pb-5">
        <!-- navbar -->
        <?php include('assets/components/nav.php'); ?>
        <!-- /* navbar -->
        <div class="row header__content align-items-center d-flex">
          <div class="row">
            <div class="col-12">
              <ul class="breadcrumb my-5">
                <li><a href="index.php">Главная</a></li>
                <li>Готовые проекты</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="text-uppercase text-start fw-medium">Готовые проекты</h1>
            <p class="mt-2 text-anim">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quibusdam repudiandae distinctio ab
              impedit officia facere ad consectetur, sapiente soluta atque commodi suscipit vitae sequi dolor quidem
              repellat non! Temporibus. &rarr;
            </p>
            <p class="mt-2 text-anim">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quibusdam repudiandae distinctio ab
              impedit officia facere ad consectetur, sapiente soluta atque commodi suscipit vitae sequi dolor quidem
              repellat non! Temporibus.
            </p>
            <p class="mt-2 text-anim">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quibusdam repudiandae distinctio ab
              impedit officia facere ad consectetur, sapiente soluta atque commodi suscipit vitae sequi dolor quidem
              repellat non! Temporibus.
            </p>
            <div class="header-content-buttons mt-5 d-flex align-items-center justify-content-start ">
              <a href="#form" class="btn btn-header">Рассчитать свой проект</a>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-5 my-lg-0 d-flex align-items-center">
            <img class="header-page-img" src="assets/images/gotovye-proekty-hero2.jpg" alt="">
          </div>
        </div>
      </div>
    </header>
    <main class="main">
      <section class="">
        <img class="bg-icon bg-icon-1" src="assets/images/icons/bg-el-1.svg" alt="" />
        <div class="container">
          <div class="row">
            <h2>Успешно завершённые <span class="section__title-span">проекты</span></h2>
          </div>
          <!-- project-gallery -->
          <div class="row justify-content-center">
            <div class="grid-gallery gallery-projects row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-4">
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/10.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/10.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/1.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/1.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/2.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/2.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/3.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/3.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/4.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/4.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/5.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/5.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/6.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/6.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/7.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/7.jpg" alt="" />
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="grid-item ">
                  <a href="assets/images/portfolio/8.jpg" data-lightbox="gridImage">
                    <img src="assets/images/portfolio/8.jpg" alt="" />
                  </a>
                </div>
              </div>

            </div>
          </div>
          <!-- project-gallery-end -->
        </div>
      </section>
      <!-- <section class="position-relative">
        <img class="bg-icon bg-icon-2" src="assets/images/icons/bg-el-3.svg" alt="" />
      </section> -->
      <?php include('assets/components/form.php'); ?>
    </main>
    <?php include('assets/components/footer.php'); ?>
  </div>
  <!-- for gallery -->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/lightbox.min.js"></script>
  <script>
    lightbox.option({
      resizeDuration: 100,
      wrapAround: false,
      disableScrolling: true,
      alwaysShowNavOnTouchDevices: true,
    });
  </script>
  <!-- for gallery-end -->
  <script src="assets/js/jquery.maskedinput.min.js"></script>
  <script src="assets/js/jquery_ui_1.12.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>