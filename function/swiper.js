const swiper_1 = new Swiper(".suggestionSwiper", {
  slidesPerView: 2,
  spaceBetween: 15,
  slidesPerGroup: 2,
  navigation: {
    hiddenClass: "swiper-button-hidden",
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  breakpoints: {
    320: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
    768: {
      slidesPerView: 4,
      slidesPerGroup: 4,
    },
    1024: {
      slidesPerView: 6,
      slidesPerGroup: 6,
    },
  },
});

const swiper_2 = new Swiper(".suggestionSwiperAutoPlay", {
  slidesPerView: 2,
  spaceBetween: 15,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  breakpoints: {
    320: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 6,
    },
  },
});
