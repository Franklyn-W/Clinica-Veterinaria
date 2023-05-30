function toggleMenu() {
    var menuContainer = document.querySelector('.menu-container');
    menuContainer.classList.toggle('open');
  }
  
  var menuToggle = document.querySelector('.menu-toggle');
  menuToggle.addEventListener('click', toggleMenu);
  
  var novoCadastroLink = document.querySelector('#novo-cadastro');
  var novoCadastroSubmenu = document.querySelector('.submenu ul');
  novoCadastroLink.addEventListener('click', function(event) {
    event.preventDefault();
    novoCadastroSubmenu.classList.toggle('hidden');
  });