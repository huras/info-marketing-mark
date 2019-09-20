$('.layout2-home .top-section .caroussel').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 3500,
  fade: true,
  speed: 700,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  pauseOnHover: false,
});

// window.addEventListener('scroll', function () {
//   loop();
// });

var scroll = window.requestAnimationFrame ||
  function (callback) { window.setTimeout(callback, 1000 / 60) };

var elementsToShow = document.querySelectorAll('.animate-on-scroll');
console.log(elementsToShow);

function isElementInViewport(el) {
  // special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}

function loop() {

  elementsToShow.forEach(function (element) {
    var animation = element.getAttribute('my-animation');

    if (isElementInViewport(element)) {
      element.classList.add(animation);
    } else {
      //element.classList.remove(animation);
    }
  });

  scroll(loop);
}

$(document).ready(function () {
  loop();
});
