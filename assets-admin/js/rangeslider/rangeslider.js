(function () {
  'use strict';

  var init = function () {

    var slider2 = new rSlider({
      target: '#slider2',
      values: [0, 1, 2, 3, 4, 5, 6, '7', 8],
      range: false,
      set: [5],
      tooltip: false,
      onChange: function (vals) {
        console.log(vals);
      }
    });

    var slider3 = new rSlider({
      target: '#slider3',
      values: { min: 0, max: 100 },
      step: 10,
      range: true,
      set: [10, 40],
      scale: false,
      labels: false,
      onChange: function (vals) {
        console.log(vals);
      }
    });

    var slider = new rSlider({
      target: '#slider',
      values: [2016, 2017, 2018, 2019, 2020, 2021, 2022, 2024],
      range: true,
      set: [2018, 2021],
      tooltip: false,
      onChange: function (vals) {
        console.log(vals);
      }
    });
    var slider4 = new rSlider({
      target: '#slider4',
      values: [100, 200, 300, 400, 500, 600, '700', 800],
      range: false,
      set: [500],
      tooltip: true,
      disabled: true,
      onChange: function (vals) {
        console.log(vals);
      }
    });
    var slider5 = new rSlider({
      target: '#slider5',
      values: [10, 20, 30, 40, 50, 60, 70, 80],
      range: true,
      set: [30, 50],
      tooltip: false,
      onChange: function (vals) {
        console.log(vals);
      }
    });
    var slider6 = new rSlider({
      target: '#slider6',
      values: [10, 20, 30, 40, 50, 60, 70, 80],
      range: true,
      set: [20, 70],
      tooltip: false,
      onChange: function (vals) {
        console.log(vals);
      }
    });
  };
  window.onload = init;
 // ============================================================


const sliderContainers = document.querySelectorAll('.slider-container');

function showSliderValue(sliderContainer) {
  const sliderInput = sliderContainer.querySelector('.slider_input');
  const sliderThumb = sliderContainer.querySelector('.slider_thumb');
  const sliderLine = sliderContainer.querySelector('.slider_line');

  if (!sliderInput || !sliderThumb || !sliderLine) {
    // If any of the required elements are missing, exit the function
    return;
  }

  sliderThumb.innerHTML = sliderInput.value + '%'; 
  const bulletPosition = sliderInput.value / sliderInput.max;
  const space = sliderInput.offsetWidth - sliderThumb.offsetWidth;

  sliderThumb.style.left = (bulletPosition * space) + 'px';
  sliderLine.style.width = (bulletPosition * 100) + '%';
}

// Initialize each slider
sliderContainers.forEach(sliderContainer => {
  showSliderValue(sliderContainer);

  window.addEventListener("resize", () => {
    showSliderValue(sliderContainer);
  });

  sliderContainer.querySelector('.slider_input').addEventListener('input', () => {
    showSliderValue(sliderContainer);
  }, false);
});


  // ====================================================================
})();