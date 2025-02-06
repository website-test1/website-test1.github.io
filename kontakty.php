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

  <title>Мегаполис34-Контакты</title>
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
        <!-- <div class="row header__content header-contacts__content align-items-center d-flex"> -->
        <div class="row my-5">
          <div class="col-12 mt-3">
            <ul class="breadcrumb mt-5">
              <li><a href="index.php">Главная</a></li>
              <li>Контакты</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <h1 class="text-uppercase text-start fw-medium mb-4">Контакты Мегаполис 34</h1>
        </div>
        <div class="row header-contacts__content">
          <div class="col-12 col-lg-6 text-anim pe-lg-1">
            <div class="row row-cols-1 row-cols-sm-2 g-1 row-contacts-info">
              <div class="col">
                <div class="col-item p-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                  </svg>
                  <div class="col-item-wrapper">
                    <h4>Телефоны:</h4>
                    <p class="">
                      <a class="nav-item-contacts-link" href="tel:88442502014">(8442) 50-20-14</a>
                      <a class="nav-item-contacts-link" href="tel:+79064002773">8-906-400-27-73</a>
                    </p>
                    <div class="message-wrapper d-flex mt-2">
                      <a class="me-3" target="_blank" href="https://wa.me/+7904xxxxxxxxx">
                        <img src="assets/images/icons/whatsapp.svg" alt="">
                      </a>
                      <a class=" d-block" target="_blank" href="">
                        <img src="assets/images/icons/tlg.svg" alt="">
                      </a>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col">
                <div class="col-item p-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                    <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                    <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                  </svg>
                  <div class="col-item-wrapper">
                    <h4 class="">e-mail:</h4>
                    <p class="text-anim"> mail@megapolis34.ru</p>
                    <a
                      class="d-block phone-link-navbar phone-link-navbar-footer"
                      href="mailto:mail@megapolis34.ru?subject=Заявка с сайта МЕГАПОЛИС34">Напишите нам</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="col-item p-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                  </svg>
                  <div class="col-item-wrapper">
                    <h4 class="">Адрес:</h4>
                    <a class="" target="_blank" href="https://yandex.ru/maps/-/CHavECZU">Волгоград, проект Ленина 69а</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="col-item p-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                  </svg>
                  <div class="col-item-wrapper">
                    <h4 class="">Режим работы:</h4>
                    <p>Пн-Пт 09:00-18:00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-1 my-lg-0 ps-lg-0 map">
            <script
              type="text/javascript"
              charset="utf-8"
              async
              src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaebee4ced1a6e2950a98d0f0e945013e6fde8d506fffc3794c4d24dad08d8535&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
          </div>
        </div>
        <div class="row">
          <div class="header-content-buttons mt-4 d-flex align-items-center justify-content-start ">
            <a href="#form" class="btn btn-header px-5">Связаться с нами</a>
          </div>
        </div>
        <!-- </div> -->
      </div>
    </header>
    <main class="main">
      <?php include('assets/components/clients.php'); ?>
      <?php include('assets/components/form.php'); ?>
    </main>
    <?php include('assets/components/footer.php'); ?>
  </div>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU&load=Geolink" type="text/javascript"></script>

  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/jquery.maskedinput.min.js"></script>
  <script src="assets/js/jquery_ui_1.12.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>