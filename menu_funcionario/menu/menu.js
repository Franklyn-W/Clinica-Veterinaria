document.addEventListener("DOMContentLoaded", function () {
    const submenuToggle = document.querySelector("#novo-cadastro");
    const submenu = document.querySelector(".submenu ul");
  
    submenuToggle.addEventListener("click", function (event) {
      event.preventDefault();
      submenu.classList.toggle("hidden");
    });
  });
  