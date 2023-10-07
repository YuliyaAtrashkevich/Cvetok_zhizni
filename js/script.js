// Анимация при скролле

function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("activity");
    } else {
      reveals[i].classList.remove("activity");
    }
  }
}
window.addEventListener("scroll", reveal);

document.addEventListener('DOMContentLoaded', function () {
  var modal = document.querySelectorAll('.modal');
  var instances = M.Modal.init(modal);
  var zoom = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(zoom);
  var carousel = document.querySelectorAll('.carousel');
  var instances = M.Carousel.init(carousel);
});
