const btn_menu = document.getElementById("btn-menu");
const nav_menu = document.getElementById("menu-nav");

btn_menu.addEventListener("click", () => {
  nav_menu.classList.toggle("aparecer");
});
