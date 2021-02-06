const mobileMenu = document.querySelector("#menu-bar");
const menu = document.querySelector("#menu");
const customMenu = document.querySelector("#custom-menu");

mobileMenu.addEventListener("click", () => {
  menu.classList.toggle("change");
  customMenu.classList.toggle("change");
});

window.addEventListener("load", () => {
  Particles.init({
    selector: ".background",
  });
});
