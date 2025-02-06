<section id="form" class="form position-relative">
  <img class="bg-icon bg-icon-3" src="assets/images/icons/bg-el-2.svg" alt="" />
  <div class="container">
    <div class="row m-0">
      <div class="col-12 p-0 form__container">
        <div class="row m-0">
          <div class="col-12 col-md-6 p-4 p-md-5">
            <h2 class="fw-medium">
              Получите <span class="section__title-span">расчет стоимости</span> вывески для вашего бизнеса
            </h2>
            <form class="mt-4" id="tg" onsubmit="sendFormTelegram(event)">
              <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Имя" required />
              </div>
              <div class="mb-3">
                <input
                  type="phone"
                  name="phone"
                  class="form-control"
                  id="phone"
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
              <button type="submit" class="btn btn-main2 py-2 btn-form">Отправить</button>
              <!-- <button type="reset" class="btn">Сброс</button> -->
              <div class="form-send-result mt-4 bg-white rounded-3">
              </div>
            </form>
          </div>
          <div class="col-12 col-md-6 form__container-img-block">
            <img src="assets/images/form/engineer-lite.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>