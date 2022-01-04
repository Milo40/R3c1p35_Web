// Grab HTML Elements
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

// Add Event Listeners
btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

var cont = 0;
function loopSlider() {
  var xx = setInterval(function () {
    switch (cont) {
      case 0: {
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        cont = 1;

        break;
      }
      case 1: {
        $("#slider-2").fadeOut(400);
        $("#slider-3").delay(400).fadeIn(400);
        cont = 2;
        break;
      }
      case 2: {
        $("#slider-3").fadeOut(400);
        $("#slider-4").delay(400).fadeIn(400);
        cont = 3;
        break;
      }
      case 3: {
        $("#slider-4").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        cont = 0;
        break;
      }
    }
  }, 6000);
}

function reinitLoop(time) {
  clearInterval(xx);
  setTimeout(loopSlider(), time);
}

$(window).ready(function () {
  $("#slider-2").hide();
  $("#slider-3").hide();
  $("#slider-4").hide();
  loopSlider();
});
