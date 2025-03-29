let btnMenu = document.getElementById('btn-abrir-menu');
let menu = document.getElementById('menu-mobile');
let overlay = document.getElementById('overlaymenu2');

// Abertura do menu
btnMenu.addEventListener('click', () => {
    menu.classList.add('abrir-menu');
    overlay.style.display = 'block'; 
});

// Fechamento do menu
menu.addEventListener('click', () => {
    menu.classList.remove('abrir-menu');
    overlay.style.display = 'none'; 
});

// Fechar o menu ao clicar na sobreposição
overlay.addEventListener('click', () => {
    menu.classList.remove('abrir-menu');
    overlay.style.display = 'none'; 
});

