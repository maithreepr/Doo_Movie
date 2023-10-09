const nav = document.getElementById("navbar-top");
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 100) {
    nav.classList.remove("nav-bg-op");
    nav.classList.add("nav-bg");
  } else {
    nav.classList.remove("nav-bg");
    nav.classList.add("nav-bg-op");
  }
});
