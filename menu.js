
let btnMenu = document.getElementById('btn-abrir-menu')
let menu = document.getElementById('menu-mobile')
let overlay =document.getElementById( 'overlaymenu2')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})