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
tl.to('.text', {
  duration: 1,
  delay: 2,
  text: {
    value: 'Рыбалка с егерем',
  },
})
tl.to('.text', {
  duration: 1,
  delay: 2,
  text: {
    value: 'Скидки постоянным клиентам ',
  },
})
// ------------------------------------
const tl2 = gsap.timeline({
  delay: 3,
})

tl2.from('.header__video__container', {
  duration: 1,
  y: '-100%',
})
tl2.from('.header__video__bg', {
  duration: 1.5,
  y: '100%',
  ease: 'power4.out',
})
tl2.from('.navbar-id', {
  duration: 1,
  y: '-100%',
})
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
gsap.to('.header__content', {
  scale: 0.05,
  ease: 'ease',
  scrollTrigger: {
    trigger: 'header',
    scrub: 1,
    start: 'top top',
    end: 'bottom',
  },
})
gsap.to('.header__video__container', {
  scale: 2,
  ease: 'ease',
  scrollTrigger: {
    trigger: 'header',
    scrub: 1,
    start: 'top top',
    end: 'bottom',
  },
})
ScrollTrigger.create({
  start: 'top top',
  trigger: 'header',
  // markers: true,
  toggleClass: {
    targets: '.header__content',
    className: 'header-active',
  },
})
// ======================
ScrollTrigger.create({
  start: 'top 80%',
  trigger: '.main',
  // markers: true,
  toggleClass: {
    targets: '.navbar-id',
    className: 'navbar-id-active',
  },
})

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

// Initialize Swiper
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
    delay: 1000,
  },
  loop: true,
  grabCursor: true,
  speed: 6000,
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
