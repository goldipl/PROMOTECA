const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
});

const categoriesSwiper = new Swiper('.categories-swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    // when window width is >= 1260px
     1260: {
      slidesPerView: 10,
    },
    // when window width is >= 1160px
    1160: {
      slidesPerView: 8,
    },
    // when window width is >= 1040px
    1040: {
      slidesPerView: 6,
    },
    // when window width is >= 840px
    840: {
      slidesPerView: 5,
    },
    // when window width is >= 740px
    740: {
      slidesPerView: 4,
    },
    // when window width is >= 200px
    200: {
      slidesPerView: 3,
    },
  },
});

const newGadgetsSwiper = new Swiper('.new-gadgets-swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    // when window width is >= 1040px
    1040: {
      slidesPerView: 6,
    },
    // when window width is >= 960px
    960: {
      slidesPerView: 5,
    },
    // when window width is >= 840px
    840: {
      slidesPerView: 4,
    },
    // when window width is >= 740px
    780: {
      slidesPerView: 3,
    },
    // when window width is >= 740px
    700: {
        slidesPerView: 2,
    },
    // when window width is >= 200px
    200: {
      slidesPerView: 1,
    },
  },
});

const trustUsSwiper = new Swiper('.trust-us-swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    // when window width is >= 1040px
    1040: {
      slidesPerView: 6,
    },
    // when window width is >= 840px
    840: {
      slidesPerView: 5,
    },
    // when window width is >= 740px
    740: {
      slidesPerView: 4,
    },
    // when window width is >= 200px
    200: {
      slidesPerView: 1,
    },
  },
});