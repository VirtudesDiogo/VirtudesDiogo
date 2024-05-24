// Adiciona comportamento de clique ao ícone do menu
const menuToggle = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.paragrafo-topo');

menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});
