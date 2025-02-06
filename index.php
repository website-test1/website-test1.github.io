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

  <title>Мегаполис34-v2.0-light-mysql</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <img class="header-img" src="assets/images/bg-header-new.jpg" alt="" />
      <div class="container h-100 d-flex my-5">
        <!-- navbar -->
        <?php include('assets/components/nav.php'); ?>
        <!-- /* navbar -->
        <div class="row header__content align-items-center d-flex">
          <div class="col-12 col-lg-6 header__content-title">
            <h1 class="text-uppercase text-start display-5 fw-medium">производство наружной и интерьерной рекламы</h1>
            <p class="text-start">Произведем и установим любую рекламную конструкцию в срок от 5 дней</p>
            <div class="row row-cols-3 mt-5">
              <div class="col plus-icon icon-1">
                <img class="mx-auto d-block" src="assets/images/icons/10let.png" alt="" />
              </div>
              <div class="col plus-icon icon-2">
                <img class="mx-auto d-block" src="assets/images/icons/dovol.png" alt="" />
              </div>
              <div class="col plus-icon icon-3">
                <img class="mx-auto d-block" src="assets/images/icons/gar.png" alt="" />
              </div>
            </div>
            <div class="header-content-buttons mt-5 d-flex align-items-center justify-content-start">
              <a href="#form" class="btn btn-header">Рассчитать свой проект</a>
              <!-- <a class="d-block" href=""><i class="bi bi-play-circle-fill play-icon"></i></a> -->
            </div>
            <!-- <p class="text-end">смотреть видео </p> -->
          </div>
          <div class="col-12 col-lg-6 header__content-form text-center">
            <div class="box-a">
              <div class="box-a__lamp lamp-1"></div>
              <div class="box-a__lamp lamp-2"></div>
              <div class="box-a__lamp lamp-3"></div>
              <div class="box-a__lamp lamp-4"></div>
              <div class="box-a__lamp lamp-5"></div>
              <div class="box-a__lamp lamp-6"></div>
              <div class="box-a__lamp lamp-7"></div>
              <div class="box-a__lamp lamp-8"></div>
              <div class="box-a__lamp lamp-9"></div>
              <div class="box-a__lamp lamp-10"></div>
              <!-- <img class="a-img" src="images/A.png" alt="" /> -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="main">
      <img class="bg-icon bg-icon-1" src="assets/images/icons/bg-el-1.svg" alt="" />
      <section class="products position-relative">
        <div class="container">
          <div class="row">
            <h2 class="mb-4">Разработка и изготовление <span class="section__title-span">наружной рекламы</span></h2>
            <p class="mb-3 text-anim">
              Рекламно-производственная компания Мегаполис 34 занимается профессиональным изготовлением наружной
              рекламы, которая позволит организовать и провести эффективную рекламную кампанию. В своей работе мы
              учитываем требования, предъявляемые к подобным носителям, создавая яркий, запоминающийся и цепляющий
              продукт.
            </p>
          </div>
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 text-center mb-5 row-gap-4">
            <div class="col">
              <div class="card products__card p-2">
                <div class="products__card__img">
                  <img class="mx-auto w-100" src="assets/images/products/3d-letters2.jpg" width="" alt="" />
                </div>
                <div class="products__card__title mt-2">
                  <h5>Объемные буквы</h5>
                </div>
                <div class="products__card__link d-flex justify-content-around flex-wrap">
                  <a class="products__card__link-link" href="obiomnye-bukvy.php">Далее</a>
                  <!-- <a href="">Заказать</a> -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card products__card p-2">
                <div class="products__card__img">
                  <img class="mx-auto w-100" src="assets/images/products/signboard.jpg" width="" alt="" />
                </div>
                <div class="products__card__title mt-2">
                  <h5>Вывеска</h5>
                </div>
                <div class="products__card__link d-flex justify-content-around flex-wrap">
                  <a href="">Далее</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card products__card p-2">
                <div class="products__card__img">
                  <img class="mx-auto w-100" src="assets/images/products/light-box2.jpg" width="" alt="" />
                </div>
                <div class="products__card__title mt-2">
                  <h5>Световой короб</h5>
                </div>
                <div class="products__card__link d-flex justify-content-around flex-wrap">
                  <a href="">Далее</a>
                  <!-- <a href="">Заказать</a> -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card products__card p-2">
                <div class="products__card__img">
                  <img class="mx-auto w-100 img-panel-kron" src="assets/images/products/panel-kron.jpg" width="" alt="" />
                </div>
                <div class="products__card__title mt-2">
                  <h5>Панель-кронштейны</h5>
                </div>
                <div class="products__card__link d-flex justify-content-around flex-wrap">
                  <a href="">Далее</a>
                  <!-- <a href="">Заказать</a> -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card products__card p-2">
                <div class="products__card__img">
                  <img class="mx-auto w-100" src="assets/images/products/stella2.jpg" width="" alt="" />
                </div>
                <div class="products__card__title mt-2">
                  <h5>Пилон, стела</h5>
                </div>
                <div class="products__card__link d-flex justify-content-around flex-wrap">
                  <a href="">Далее</a>
                  <!-- <a href="">Заказать</a> -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card products__card p-2">
                <div class="products__card__img">
                  <img class="mx-auto w-100" src="assets/images/products/roof.jpg" width="" alt="" />
                </div>
                <div class="products__card__title mt-2">
                  <h5>Крышная установка</h5>
                </div>
                <div class="products__card__link d-flex justify-content-around flex-wrap">
                  <a href="">Далее</a>
                  <!-- <a href="">Заказать</a> -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card products__card p-2">
                <div class="products__card__img">
                  <img class="mx-auto w-100" src="assets/images/products/fasad2.jpg" width="" alt="" />
                </div>
                <div class="products__card__title mt-2">
                  <h5>Оформление фасада</h5>
                </div>
                <div class="products__card__link d-flex justify-content-around flex-wrap">
                  <a href="">Далее</a>
                  <!-- <a href="">Заказать</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about-us" class="advantages position-relative">
        <img class="bg-icon bg-icon-2" src="assets/images/icons/bg-el-3.svg" alt="" />
        <div class="container">
          <div class="row mb-4">
            <h2>Компания <span class="section__title-span">"МЕГАПОЛИС 34"</span> предлагает</h2>
          </div>
          <div class="row row-cols-1 row-cols-md-2 gy-4">
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" src="assets/images/advantages/production.png" alt="" />
              <p class="d-block text-anim">Собственное производство наружной рекламы на современном оборудовании</p>
            </div>
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" width="50" src="assets/images/advantages/profi.png" alt="" />
              <p class="text-anim">Сотрудники нашей рекламной компании специалисты своего дела с большим опытом работы.</p>
            </div>
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" width="50" src="assets/images/advantages/profi.png" alt="" />
              <p class="text-anim">Комплексное оформление торговых площадей с ремонтом помещений и ведение до самого открытия.</p>
            </div>
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" width="50" src="assets/images/advantages/profi.png" alt="" />
              <p class="text-anim">Гарантия лучшей цены на рекламу, нашли дешевле - звоните договоримся!</p>
            </div>
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" src="assets/images/advantages/24-7.png" alt="" />
              <p class="text-anim">Круглосуточное производство рекламы 24/7. Готовность выполнить любую задачу клиента в срок.</p>
            </div>
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" src="assets/images/advantages/service.png" alt="" />
              <p class="text-anim">Гарантийное обслуживание в течение 24 месяцев. Индивидуальный подход!</p>
            </div>
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" src="assets/images/advantages/time.png" alt="" />
              <p class="text-anim">Сроки производства рекламных конструкций от 3х рабочих дней</p>
            </div>
            <div class="col d-flex align-items-center">
              <img class="d-block me-2" src="assets/images/advantages/out-profi.png" alt="" />
              <p class="text-anim">Бесплатный выезд специалиста на объект и проведение всех необходимых замеров</p>
            </div>
          </div>
          <div class="row my-4">
            <h3 class="text-center">Видео о процессе <span class="section__title-span">нашей работы</span></h3>
          </div>
          <div class="row mt-3 m-0 d-flex justify-content-center">
            <div class="col-12 col-lg-6 video-box d-flex mb-3 mb-lg-0">
              <video class="video-box__item" poster="assets/images/screenVideo.jpg" muted preload="metadata" controls>
                <source src="megapolis-work-low.mp4" type="video/mp4" />
              </video>
            </div>
            <div class="col-12 col-lg-6">
              <div class="text">
                <p class="text-anim">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium deserunt molestiae eum
                  adipisci, obcaecati numquam nam aspernatur recusandae ut eaque id laboriosam perspiciatis unde quos,
                  expedita fugiat delectus soluta in!
                </p>
                <p class="text-anim">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium deserunt molestiae eum
                  adipisci, obcaecati numquam nam aspernatur recusandae ut eaque id laboriosam perspiciatis unde quos,
                  expedita fugiat delectus soluta in!
                </p>
                <p class="text-anim">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium deserunt molestiae eum
                  adipisci, obcaecati numquam nam aspernatur recusandae ut eaque id laboriosam perspiciatis unde quos,
                  expedita fugiat delectus soluta in!
                </p>
              </div>
            </div>
            <div class="header-content-buttons mt-4 d-flex align-items-center justify-content-center">
              <a href="#form" class="btn btn-header btn-main">Оставить заявку</a>
            </div>
          </div>
        </div>
      </section>
      <section class="before-after">
        <div class="container">
          <div class="row mb-4">
            <h2>Результат <span class="section__title-span">нашей работы</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
              <div class="text">
                <p class="text-anim">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit ut optio veritatis debitis
                  voluptas dicta corrupti velit dolore suscipit, doloribus assumenda ea aperiam doloremque quam libero
                  accusantium autem. Quasi.
                </p>
                <p class="text-anim">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit ut optio veritatis debitis
                  voluptas dicta corrupti velit dolore suscipit, doloribus assumenda ea aperiam doloremque quam libero
                  accusantium autem. Quasi.
                </p>
                <p class="text-anim">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit ut optio veritatis debitis
                  voluptas dicta corrupti velit dolore suscipit, doloribus assumenda ea aperiam doloremque quam libero
                  accusantium autem. Quasi.
                </p>
              </div>
            </div>
            <div class="col-11 col-lg-6 before-after__container">
              <div class="image-container">
                <img class="image-before slider-image" src="assets/images/portfolio/702-1.jpg" alt="" />
                <img class="image-after slider-image" src="assets/images/portfolio/702.jpg" alt="" />
              </div>
              <input
                class="slider"
                type="range"
                min="0"
                max="100"
                value="50"
                aria-label="Percentage of before photo shown" />
              <div class="slider-line"></div>
              <div class="slider-button" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000000" viewBox="0 0 256 256">
                  <path
                    d="M136,40V216a8,8,0,0,1-16,0V40a8,8,0,0,1,16,0ZM96,120H35.31l18.35-18.34A8,8,0,0,0,42.34,90.34l-32,32a8,8,0,0,0,0,11.32l32,32a8,8,0,0,0,11.32-11.32L35.31,136H96a8,8,0,0,0,0-16Zm149.66,2.34-32-32a8,8,0,0,0-11.32,11.32L220.69,120H160a8,8,0,0,0,0,16h60.69l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,245.66,122.34Z"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <script>
          const container = document.querySelector('.before-after__container')
          document.querySelector('.slider').addEventListener('input', e => {
            container.style.setProperty('--position', `${e.target.value}%`)
          })
        </script>
      </section>
      <?php include('assets/components/projects.php'); ?>
      <?php include('assets/components/form.php'); ?>
      <?php include('assets/components/clients.php'); ?>
      <section class="map-form">
        <div class="container">
          <div class="row">
            <div class="row m-0">
              <div class="col-12 p-0 form__container">
                <div class="row m-0">
                  <div class="col-12 col-md-6 p-4 p-md-5 form-map__container-block">
                    <h2 class="fw-medium">Остались вопросы?</h2>
                    <p class="text-center text-anim">Наш специалист свяжется с Вами в течении 5 минут</p>
                    <form class="mt-4" id="tg" onsubmit="sendFormTelegram2(event)">
                      <div class=" mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Имя" required />
                      </div>
                      <div class="mb-3">
                        <input
                          type="phone"
                          name="phone"
                          class="form-control"
                          id="phone1"
                          placeholder="Телефон"
                          required />
                      </div>
                      <div class="mb-3">
                        <textarea
                          class="form-control"
                          id="msg"
                          name="message"
                          placeholder="Сообщение"
                          rows="3"
                          required></textarea>
                      </div>
                      <button type="submit" class="btn btn-main2 py-2 btn-form2">Отправить</button>
                      <!-- <button type="reset" class="btn">Сброс</button> -->
                      <div class="form-send-result2 mt-4 bg-white rounded-3">
                      </div>
                    </form>
                  </div>
                  <div class="col-12 col-md-6 form__container-map-block">
                    <script
                      type="text/javascript"
                      charset="utf-8"
                      async
                      src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaebee4ced1a6e2950a98d0f0e945013e6fde8d506fffc3794c4d24dad08d8535&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include('assets/components/footer.php'); ?>
  </div>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/jquery.maskedinput.min.js"></script>
  <script src="assets/js/jquery_ui_1.12.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>