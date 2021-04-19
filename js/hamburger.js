window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu__block'),
    menuItem = document.querySelectorAll('.menu__block'),
    hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu__block_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('menu__block_active');
        })
    })
})