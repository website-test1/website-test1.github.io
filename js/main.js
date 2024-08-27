const tlLoader = gsap.timeline()
tlLoader
  .set('.loader', { yPercent: -100 })
  .set('header h1', { y: '100%', opacity: 0 })
  .set('.header__text__anim', { y: '100%', opacity: 0 })
  .set('.header__content a', { y: '100%', opacity: 0 })
  .set('.header-socials-block', { y: '150%', opacity: 0 })
  .set('.header__video__container', { y: '-100%' })
  .set('.header__video__bg', { y: '100%' })
  .set('.navbar-id', { y: '-100%' })
  .to('.loader', {
    yPercent: 0,
    duration: 0.1,
  })
  .to('.loader', {
    delay: 1,
    yPercent: -100,
    duration: 0,
  })

  .to('header h1', {
    delay: 1,
    y: 0,
    opacity: 1,
    duration: 1,
  })

  .to(
    '.header__text__anim',
    {
      y: 0,
      opacity: 1,
      duration: 1,
    },
    '-=0.2',
  )
  .to(
    '.header__content a',
    {
      y: 0,
      opacity: 1,
      duration: 1,
      ease: 'power4.out',
    },
    '-=0.2',
  )
  .to(
    '.header-socials-block',
    {
      y: 0,
      opacity: 1,
      duration: 1,
    },
    '<',
  )

  .to('.header__video__container', {
    y: 0,
    duration: 1,
  })
  .to('.header__video__bg', {
    y: 0,
    duration: 1,
  })
  .to('.navbar-id', {
    y: 0,
    duration: 1.5,
  })
// анимация header
gsap.registerPlugin(TextPlugin, ScrollTrigger)
const tl = gsap.timeline({
  repeat: -1,
  repeatDelay: 2,
})

tl.to('.text', {
  duration: 1,
  text: {
    value: '70 км от центра города',
  },
})
  .to('.text', {
    duration: 1,
    delay: 2,
    text: {
      value: 'Рыбалка с егерем',
    },
  })
  .to('.text', {
    duration: 1,
    delay: 2,
    text: {
      value: 'Скидки постоянным клиентам ',
    },
  })
// ------------------------------------
// loader

// loader-end
// const tl2 = gsap.timeline({
//   delay: 3,
// })

// tl2
//   .from('.header__video__container', {
//     duration: 1,
//     y: '-100%',
//   })
//   .from('.header__video__bg', {
//     duration: 1.5,
//     y: '100%',
//   })
//   .from('.navbar-id', {
//     duration: 1,
//     y: '-100%',
//   })
// ------------------------------------
// gsap.to(".header__video__container", {
// 	scrollTrigger: {
// 		trigger: ".header",
// 		start: "top top",
// 		// markers: true,
// 		scrub: true,
// 	},
// 	scale: 1.3,
// })

// gsap.to(".navbar-id", {
// 	scrollTrigger: {
// 		trigger: ".main",
// 		start: "top 80%",
// 		end: "bottom top",
// 		markers: true,
// 		scrub: true,
// 		pin: '.img1',
// 		pinSpacing: false,
// 		toggleClass: {
// 			targets: ".navbar-id",
// 			className: "navbar-id-active",
// 		},
// 	},
// })
// ======================
ScrollTrigger.create({
  start: '5% top',
  trigger: 'header',
  // markers: true,
  toggleClass: {
    targets: '.header__content',
    className: 'header-active',
  },
})
const tl3 = gsap.timeline()
tl3
  .to('.header', {
    scrollTrigger: {
      trigger: '.header',
      start: '0 0',
      scrub: true,
    },
  })
  .to('.header__content', {
    scrollTrigger: {
      trigger: 'header',
      scrub: true,
      start: '5% top',
    },
    scale: 0.05,
  })
  .to('.header__video__container', {
    scrollTrigger: {
      trigger: 'header',
      scrub: true,
      start: '5% top',
    },
    scale: 2,
  })
// ----------------

// ======================
// ScrollTrigger.create({
//   start: 'top 80%',
//   trigger: '.main',
//   markers: true,
//   toggleClass: {
//     targets: '.navbar-id',
//     className: 'navbar-id-active',
//   },
// })

// анимация header-end

// letter h1 animation
document.querySelectorAll('.text-id').forEach(e => {
  e.innerHTML = e.textContent
    .replace(/ (-|#|@){1}/g, s => s[1] + s[0])
    .replace(/(\S*)/g, m => {
      return m.replace(/\S(-|#|@)?/g, '<span class="letter">$&</span>')
    })
  e.querySelectorAll('.letter').forEach(function (l, i) {
    l.setAttribute('style', `z-index: -${i}; transition-duration: ${i / 5 + 1}s`)
  })
})
// letter h1 animation-end

// parallax
// jarallax(document.querySelectorAll(".jarallax"), {
// 	speed: 0.2,
// })
// parallax-end

// animation span
// gsap.utils.toArray("main span").forEach(span => {
// 	ScrollTrigger.create({
// 		trigger: span, // the element we want to activate ScrollTrigger
// 		start: "top 80%",
// 		onEnter: () => span.classList.add("active-span"),
// 	})
// })

// swiper-rooms
var swiperRooms = new Swiper('.swiper-rooms', {
  effect: 'flip',
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})

// swiper-sale
var swiperSale = new Swiper('.swiper-sale', {
  slidesPerView: 3,
  spaceBetween: 20,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  autoplay: {
    delay: 10,
  },
  loop: true,
  grabCursor: true,
  speed: 4000,
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
})
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
