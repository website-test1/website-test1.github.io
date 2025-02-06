<?php include('path.php'); ?>
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

  <title>Мегаполис34-Объемные буквы</title>
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
                <li><a href="/">Главная</a></li>
                <li>Объемные буквы</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="text-uppercase text-start fw-medium">Объемные буквы</h1>
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
            <div class="header-content-buttons mt-5 d-flex align-items-center justify-content-start">
              <a href="#form" class="btn btn-header">Рассчитать свой проект</a>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-5 my-lg-0 text-center">
            <div
              id="carouselExampleIndicators1"
              class="carousel slide"
              data-bs-ride="carousel"
              data-bs-interval="2000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/portfolio/1.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/2.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/3.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/4.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/5.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/6.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/7.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/8.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/9.jpg" class="d-block" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="assets/images/portfolio/10.jpg" class="d-block" alt="..." />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-secondary rounded-5" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-secondary rounded-5" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
              </button>
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1">
                  <div class="dot"></div>
                </button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="4"
                  aria-label="Slide 5"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="5"
                  aria-label="Slide 6"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="6"
                  aria-label="Slide 7"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="7"
                  aria-label="Slide 8"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="8"
                  aria-label="Slide 9"></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators1"
                  data-bs-slide-to="9"
                  aria-label="Slide 10"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="main">
      <section class="examples-letters">
        <img class="bg-icon bg-icon-1" src="assets/images/icons/bg-el-1.svg" alt="" />
        <div class="container">
          <div class="row">
            <h2>Производство объемных букв для рекламы Вашего бизнеса!</h2>
          </div>
          <div class="row mt-5 gap-5 m-auto">
            <div class="card examples-letters__card">
              <div class="row g-0">
                <div class="col-md-4 examples-letters__card-imgBox">
                  <img
                    src="assets/images/portfolio/1.jpg"
                    class="examples-letters-img"
                    alt="..." />
                </div>
                <div class="col-md-8 d-flex justify-content-end">
                  <div class="card-body mt-3 mt-md-0">
                    <h3 class="card-title text-start">Световые с диодной подсветкой</h3>
                    <p class="card-text text-anim">
                      Буквы с подсветкой LED лентой или кластерами. Свет проходит через свето-пропускающий материал
                      (акрил, оргстекло). LED сокращает потребление электроэнергии и не уступают в яркости привычной
                      подсветке люминесцентными лампами и неону. Цвет подсветки любой по RGB схеме.
                    </p>
                    <div class="card-body-link text-end mt-3">
                      <a class="btn-main2 btn d-inline-block px-5" href="#">Заказать</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card examples-letters__card">
              <div class="row g-0">
                <div class="col-md-4 examples-letters__card-imgBox">
                  <img src="assets/images/portfolio/2.jpg" class="examples-letters-img" alt="..." />
                </div>
                <div class="col-md-8 d-flex justify-content-end">
                  <div class="card-body mt-3 mt-md-0">
                    <h3 class="card-title text-start">Не световые, без подсветки</h3>
                    <p class="card-text text-anim">
                      Применяются в вывесках, располагающихся в хорошо освещенных местах и отдельно в интерьере в
                      качестве декора. Возможно освещение конструкции небольшими лампами и прожекторами. Буквы без
                      подсветки выполняются из пластика с покраской или оклейкой пленкой Oracal.
                    </p>
                    <div class="card-body-link text-end mt-3">
                      <a class="btn-main2 btn d-inline-block px-5" href="#">Заказать</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card examples-letters__card">
              <div class="row g-0">
                <div class="col-md-4 examples-letters__card-imgBox">
                  <img src="assets/images/portfolio/3.jpg" class="examples-letters-img" alt="..." />
                </div>
                <div class="col-md-8 d-flex justify-content-end">
                  <div class="card-body mt-3 mt-md-0">
                    <h3 class="card-title text-start">С контражурной подсветкой</h3>
                    <p class="card-text text-anim">
                      Для получения эффекта контражура лицевая сторона буквы не просвечивается. Свет проходит через
                      заднюю стенку и создает ореол вокруг символов вывески отражаясь от поверхности, на которой
                      располагается конструкция. Применяют для рекламного оформления помещений и снаружи на коробах и
                      в качестве самостоятельного элемента.
                    </p>
                    <div class="card-body-link text-end mt-3">
                      <a class="btn-main2 btn d-inline-block px-5" href="#">Заказать</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include('assets/components/projects.php'); ?>
      <!-- <section class="position-relative">
        <img class="bg-icon bg-icon-2" src="assets/images/icons/bg-el-3.svg" alt="" />
      </section> -->
      <?php include('assets/components/form.php'); ?>
      <?php include('assets/components/clients.php'); ?>
    </main>
    <?php include('assets/components/footer.php'); ?>
  </div>
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script src="assets/js/jquery.maskedinput.min.js"></script>
  <script src="assets/js/jquery_ui_1.12.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>