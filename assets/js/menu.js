const menu = document.querySelector('.main-menu');
const btn = document.querySelector('#mobile-menu');
const logo = document.querySelector('.logo-nomad');

function menuMobile() {
    menu.classList.toggle('open');
    btn.classList.toggle('open');
    logo.classList.toggle('hide');
}