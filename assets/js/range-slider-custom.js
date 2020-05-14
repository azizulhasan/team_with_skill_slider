
(function () {
  var selector = '[data-rangeSlider]',
  elements = document.querySelectorAll(selector);

  function valueOutput(element) {
    var value = element.value,
    output = element.parentNode.getElementsByTagName('output')[0];
    output.innerHTML = value;
  }

  Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function (el) {
    el.addEventListener('input', function (e) {
      valueOutput(e.target);
    }, false);
  });

  rangeSlider.create(elements, {
    onInit: function () {
    },
  });


})();
