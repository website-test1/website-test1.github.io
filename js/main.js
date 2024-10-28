
// ----------анимация при скролле-------------
const navbar = document.querySelector('.navbar-id')
const header = document.querySelector('.header')
const navbarHeight = navbar.offsetHeight
const headerHeight = header.offsetHeight

window.addEventListener('scroll', () => {
  const scrollItems = document.querySelectorAll('.scroll-items')
  const banner = document.querySelector('.banner')
  const scrollAnimation = () => {
    // navbar-animation
    let scrollDistance = window.scrollY
    if (scrollDistance >= headerHeight / 10) {
      navbar.classList.add('navbar-id-active')
    } else {
      navbar.classList.remove('navbar-id-active')
    }
    // navbar-animation-end

    // scroll-items
    let windowCenter = window.innerHeight / 2 + window.scrollY
    scrollItems.forEach(el => {
      let scrollOffset = el.getBoundingClientRect().top - 400 + window.scrollY
      if (scrollOffset <= windowCenter) {
        el.classList.add('box-active')
      } else {
        el.classList.remove('box-active')
      }
    })
    // scroll-items-end

    // banner
    let scrollOffset1 = banner.getBoundingClientRect().top - 200 + window.scrollY
    if (scrollOffset1 <= windowCenter) {
      banner.classList.add('banner-active')
    } else {
      banner.classList.remove('banner-active')
    }
    // banner-end
  }
  scrollAnimation()
})
// ----------анимация при скролле-end-------------

// -------------скрытие меню при клике на ссылку----------------
const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarNav')
const bsCollapse = bootstrap.Collapse.getOrCreateInstance(menuToggle, {
  toggle: false,
})
navLinks.forEach(l => {
  l.addEventListener('click', () => {
    bsCollapse.toggle()
  })
})
// ---------------/*-скрытие меню при клике на ссылку-------------

// маска для набора номера телефона в форме обратной связи и модального окна
window.addEventListener('DOMContentLoaded', function () {
  ;[].forEach.call(document.querySelectorAll('#phone'), function (input) {
    var keyCode
    function mask(event) {
      event.keyCode && (keyCode = event.keyCode)
      var pos = this.selectionStart
      if (pos < 3) event.preventDefault()
      var matrix = '+7 (___) ___ ____',
        i = 0,
        def = matrix.replace(/\D/g, ''),
        val = this.value.replace(/\D/g, ''),
        new_value = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) : a
        })
      i = new_value.indexOf('_')
      if (i != -1) {
        i < 5 && (i = 3)
        new_value = new_value.slice(0, i)
      }
      var reg = matrix
        .substr(0, this.value.length)
        .replace(/_+/g, function (a) {
          return '\\d{1,' + a.length + '}'
        })
        .replace(/[+()]/g, '\\$&')
      reg = new RegExp('^' + reg + '$')
      if (!reg.test(this.value) || this.value.length < 5 || (keyCode > 47 && keyCode < 58)) {
        this.value = new_value
      }
      if (event.type == 'blur' && this.value.length < 5) {
        this.value = ''
      }
    }

    input.addEventListener('input', mask, false)
    input.addEventListener('focus', mask, false)
    input.addEventListener('blur', mask, false)
    input.addEventListener('keydown', mask, false)
  })
})
// -----------------/*-маска для набора номера телефона в форме обратной связи и модального окна
