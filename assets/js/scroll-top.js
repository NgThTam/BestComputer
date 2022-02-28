// start scroll top
const toTop = document.querySelector(".scroll-top");
window.addEventListener("scroll", () => {
  if(window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  } 
})
// end scroll top 
const toBottom = document.querySelector(".row .col .navbar");
const colorHeader = $(".nav-header .text-dark");
window.addEventListener("scroll", () => {
	if(window.pageYOffset > 100) {
		toBottom.classList.add("active");
		colorHeader.removeClass("text-dark");
	} else {
		toBottom.classList.remove("active");
		colorHeader.addClass("text-dark")
	}
});