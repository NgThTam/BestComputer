 // start product counter
var num;

$('.button-count:first-child').click(function(){
  num = parseInt($('input:text').val());
  if (num > 1) {
    $('input:text').val(num - 1);
  }
  if (num == 2) {
    $('.button-count:first-child').prop('disabled', true);
  }
  if (num == 10) {
    $('.button-count:last-child').prop('disabled', false);
  }
});

$('.button-count:last-child').click(function(){
  num = parseInt($('input:text').val());
  if (num < 10) {
    $('input:text').val(num + 1);
  }
  if (num > 0) {
    $('.button-count:first-child').prop('disabled', false);
  }
  if (num == 9) {
    $('.button-count:last-child').prop('disabled', true);
  }
});

// end product counter
// loader 
window.onload = function() {
  document.querySelector('.loader').style.display = 'none';
}
// loader

