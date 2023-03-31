
var URLactual = window.location;
if (URLactual.pathname === "/about-us/") {
  document.getElementById("index-about-us").classList.add("active");
  document.getElementById("menu-header").classList.remove("menu--active");
} else if (URLactual.pathname === "/we-make/") {
  document.getElementById("index-we-make").classList.add("active");
  document.getElementById("menu-header").classList.remove("menu--active");
} else if (URLactual.pathname === "/how-we-do/") {
  document.getElementById("index-how-we-do").classList.add("active");
  document.getElementById("menu-header").classList.remove("menu--active");
} else if (URLactual.pathname.includes("/programas-aulas")) {
  document.getElementById("index-programs").classList.add("active");
  document.getElementById("menu-header").classList.remove("menu--active");

  if (URLactual?.search === "?link=aulas-en-paz") {
    document.getElementById("url-aulas-en-paz").classList.add("item-active")
  }
  if (URLactual?.search === "?link=aulitas-en-paz") {
    document.getElementById("url-aulitas-en-paz").classList.add("item-active")
  }
  if (URLactual?.search === "?link=paso-a-paso") {
    document.getElementById("url-paso-a-paso").classList.add("item-active")
  }
  if (URLactual?.search === "?link=respira") {
    document.getElementById("url-respira").classList.add("item-active")
  }

} else if (URLactual.pathname === "/resources/") {
  document.getElementById("index-resources").classList.add("active");
  document.getElementById("menu-header").classList.remove("menu--active");
} else if (URLactual.pathname === "/contact/") {
  document.getElementById("index-contact").classList.add("active");
  document.getElementById("menu-header").classList.remove("menu--active");
}

var classListMenu = document.getElementById("button-open-menu").classList;

document.querySelector("#button-open-menu")?.addEventListener("click", () => {
  if (classListMenu[0] === "button-menu" && !classListMenu[1]) {
    classListMenu.add("button-menu--active");
    document.getElementById("menu-header").classList.add("menu--active");
  } else {
    classListMenu.remove("button-menu--active");
    document.getElementById("menu-header").classList.remove("menu--active");
  }
});