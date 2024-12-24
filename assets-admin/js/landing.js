(function ($) {
  "use strict";
  // localstorage all setting

  $(".page-wrapper").attr("class", localStorage.getItem("page-wrapper"));

  // dubai layout
  $(".default-view").click(function () {
    localStorage.setItem("page-wrapper", "compact-wrapper");
  });

  $(".los-view").click(function () {
    localStorage.setItem("page-wrapper", "horizontal-wrapper material-type");
  });

  $(".paris-view").click(function () {
    localStorage.setItem("page-wrapper", "compact-wrapper dark-sidebar");
  });

  $(".tokyo-view").click(function () {
    localStorage.setItem("page-wrapper", "compact-sidebar");
  });

  $(".moscow-view").click(function () {
    localStorage.setItem("page-wrapper", "compact-sidebar compact-small");
  });

  $(".singapore-view").click(function () {
    localStorage.setItem("page-wrapper", "horizontal-wrapper enterprice-type");
  });

  $(".newyork-view").click(function () {
    localStorage.setItem("page-wrapper", "compact-wrapper box-layout");
  });

  $(".barcelona-view").click(function () {
    localStorage.setItem(
      "page-wrapper",
      "horizontal-wrapper enterprice-type advance-layout"
    );
  });

  $(".madrid-view").click(function () {
    localStorage.setItem("page-wrapper", "compact-wrapper color-sidebar");
  });

  $(".rome-view").click(function () {
    localStorage.setItem(
      "page-wrapper",
      "compact-sidebar compact-small material-icon"
    );
  });

  $(".seoul-view").click(function () {
    localStorage.setItem("compact-wrapper modern-type");
  });

  $(".landon-view").click(function () {
    localStorage.setItem("page-wrapper", " only-body");
  });

  $(".prooduct-details-box .close").on("click", function (e) {
    var tets = $(this).parent().parent().parent().parent().addClass("d-none");
    console.log(tets);
  });
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 600) {
      $(".tap-top").fadeIn();
    } else {
      $(".tap-top").fadeOut();
    }
  });

  $(".tap-top").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      }, 
      600
    );
    return false;
  });

})(jQuery);

// var navbar = document.getElementById("scroll-spy");

// // Get all buttons with class="btn" inside the container
// var btns = navbar.getElementsByClassName("btn");

// // Loop through the buttons and add the active class to the current/clicked button
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("navbar-nav navbar_nav_modify active");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += " active";
//   });
// }
var btnContainer = document.getElementById("home");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-link");

btns[0].classList.add("active");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
 btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
 });
}


//  cursor
const stats = new Stats();
stats.showPanel(0);
$('body').append(stats.dom);

const cursor = $('.cursor');
const cursorInner = $('.cursor-move-inner');
const cursorOuter = $('.cursor-move-outer');

const trigger = $('button');

let mouseX = 0;
let mouseY = 0;
let mouseA = 0;

let innerX = 0;
let innerY = 0;

let outerX = 0;
let outerY = 0;

let loop = null;

$(document).on('mousemove', (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;

  if (!loop) {
    loop = window.requestAnimationFrame(render);
  }
});

trigger.on('mouseenter', () => {
  cursor.addClass('cursor--hover');
});

trigger.on('mouseleave', () => {
  cursor.removeClass('cursor--hover');
});

function render() {
  stats.begin();

  loop = null;

  innerX = lerp(innerX, mouseX, 0.15);
  innerY = lerp(innerY, mouseY, 0.15);

  outerX = lerp(outerX, mouseX, 0.13);
  outerY = lerp(outerY, mouseY, 0.13);

  const angle = Math.atan2(mouseY - outerY, mouseX - outerX) * 180 / Math.PI;

  const normalX = Math.min(Math.floor((Math.abs(mouseX - outerX) / outerX) * 1000) / 1000, 1);
  const normalY = Math.min(Math.floor((Math.abs(mouseY - outerY) / outerY) * 1000) / 1000, 1);
  const normal = normalX + normalY * 0.5;
  const skwish = normal * 0.7;

  cursorInner.css('transform', `translate3d(${innerX}px, ${innerY}px, 0)`);
  cursorOuter.css('transform', `translate3d(${outerX}px, ${outerY}px, 0) rotate(${angle}deg) scale(${1 + skwish}, ${1 - skwish})`);

  stats.end();

  // Stop loop if interpolation is done.
  if (normal !== 0) {
    loop = window.requestAnimationFrame(render);
  }
}

function lerp(s, e, t) {
  return (1 - t) * s + t * e;
}

// ==================