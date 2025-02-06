document.addEventListener('DOMContentLoaded', () => {
  // ---------------анимация navbar и блоков при скроле-----------
  const navbar = document.querySelector('.navbar-id')
  const header = document.querySelector('.header')
  // const dropdownMenu = document.querySelector('.dropdown-menu')
  // const navbarHeight = navbar.offsetHeight
  const headerHeight = header.offsetHeight
  const scrollItems = document.querySelectorAll('.text-anim')

  const scrollAnim = () => {
    let windowCenter = window.innerHeight / 2 + window.scrollY
    scrollItems.forEach(el => {
      let scrollOffset = el.getBoundingClientRect().top - 400 + window.scrollY
      if (scrollOffset <= windowCenter) {
        el.classList.add('text-active')
      } else {
        el.classList.remove('text-active')
      }
    })
  }

  const headerAnim = () => {
    let scrollDistance = window.scrollY
    if (scrollDistance >= headerHeight - headerHeight / 1.1) {
      navbar.classList.add('active-navbar')
    } else {
      navbar.classList.remove('active-navbar')
    }
  }

  headerAnim()
  scrollAnim()

  window.addEventListener('scroll', () => {
    headerAnim()
    scrollAnim()
  })
})
// ---------------/*-анимация navbar и блоков при скроле-----------
// <!-- js для отправки form в telegram -->
const TELEGRAM_BOT_TOKEN = '7802469345:AAEh8HfLfK2aG25Ph83nZqh05NTGgMUpMN4'
const TELEGRAM_CHAT_ID = '-1002342108551'
const API = `https:\\api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/sendMessage`

async function sendFormTelegram(event) {
  event.preventDefault() //убираем перезагрузку страницы после отправки

  //собираем все данные из формы
  const form = event.target
  const formBtn = document.querySelector('.btn-form')
  const formSendResult = document.querySelector('.form-send-result')
  formSendResult.textContent = ''
  const { name, phone, message } = Object.fromEntries(new FormData(form).entries())

  //текст который отправляется в телеграм
  const text = `Заявка от ${name}\nТелефон: ${phone}\nСообщение: ${message}`

  //отправка сообщения
  try {
    formBtn.textContent = 'Отправка...'
    const response = await fetch(API, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        chat_id: TELEGRAM_CHAT_ID,
        text,
      }),
    })
    if (response.ok) {
      formSendResult.textContent = 'Сообщение отправлено. Мы свяжемся с вами в ближайшее время.'
      formSendResult.style.color = 'green'
      formSendResult.style.padding = '10px'
      form.reset()
    } else {
      throw new Error(response.statusText)
    }
  } catch (error) {
    console.error(error)
    formSendResult.textContent = 'Ошибка. Сообщение не отправлено. Попробуйте позже.((('
    formSendResult.style.color = 'red'
  } finally {
    formBtn.textContent = 'Отправить'
  }
}
// <!-- js для отправки form в telegram-конец -->

// <!-- js для отправки form2 в telegram -->
const TELEGRAM_BOT_TOKEN2 = '7802469345:AAEh8HfLfK2aG25Ph83nZqh05NTGgMUpMN4'
const TELEGRAM_CHAT_ID2 = '-1002342108551'
const API2 = `https:\\api.telegram.org/bot${TELEGRAM_BOT_TOKEN2}/sendMessage`

async function sendFormTelegram2(event) {
  event.preventDefault() //убираем перезагрузку страницы после отправки

  //собираем все данные из формы
  const form2 = event.target
  const formBtn2 = document.querySelector('.btn-form2')
  const formSendResult2 = document.querySelector('.form-send-result2')
  formSendResult2.textContent = ''
  const { name, phone, message } = Object.fromEntries(new FormData(form2).entries())

  //текст который отправляется в телеграм
  const text2 = `Заявка от ${name}\nТелефон: ${phone}\nСообщение: ${message}`

  //отправка сообщения
  try {
    formBtn2.textContent = 'Отправка...'
    const response = await fetch(API, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        chat_id: TELEGRAM_CHAT_ID2,
        text: text2,
      }),
    })
    if (response.ok) {
      formSendResult2.textContent = 'Сообщение отправлено. Мы свяжемся с вами в ближайшее время.'
      formSendResult2.style.color = 'green'
      formSendResult2.style.padding = '10px'
      form2.reset()
    } else {
      throw new Error(response.statusText)
    }
  } catch (error) {
    console.error(error)
    formSendResult2.textContent = 'Ошибка. Сообщение не отправлено. Попробуйте позже.((('
    formSendResult2.style.color = 'red'
  } finally {
    formBtn2.textContent = 'Отправить'
  }
}
// <!-- js для отправки form в telegram-конец -->
// маска для номера телефона
$(document).ready(function () {
  $('#phone').mask('+7(999) 999-9999')
})
$(document).ready(function () {
  $('#phone1').mask('+7(999) 999-9999')
})
// маска для номера телефона-конец
