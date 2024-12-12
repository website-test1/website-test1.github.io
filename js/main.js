// ---------------анимация navbar при скроле-----------
const navbar = document.querySelector('.navbar-id')
const header = document.querySelector('.header')
const dropdownMenu = document.querySelector('.dropdown-menu')
const navbarHeight = navbar.offsetHeight
const headerHeight = header.offsetHeight

window.addEventListener('scroll', () => {
  let scrollDistance = window.scrollY
  if (scrollDistance >= headerHeight - headerHeight / 1.1) {
    navbar.classList.add('active-navbar')
    // dropdownMenu.classList.add('active-navbar')
  } else {
    navbar.classList.remove('active-navbar')
    // dropdownMenu.classList.remove('active-navbar')
  }
})
// ---------------/*-анимация navbar при скроле-----------

// --slider before-after animation

// --slider before-after animation-end
