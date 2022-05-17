const mobileMenu = document.querySelector(".mobile-menu");
const scrollBtn = document.querySelector(".scroll-top");

mobileMenu.addEventListener("click", function () {
  document.querySelector(".menu").classList.toggle("show");
});

window.addEventListener("scroll", function () {
  if (
    this.document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    scrollBtn.style.display = "block";
  } else {
    scrollBtn.style.display = "none";
  }
});

scrollBtn.addEventListener("click", function () {
  document.documentElement.scrollTop = 0;
});
