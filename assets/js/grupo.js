
window.addEventListener('load',function(){

const divs = document.querySelectorAll('.glider');

// Itera sobre cada div
divs.forEach((div, index) => {
    // Adiciona um número à classe existente ou adiciona uma nova classe com o número
    div.classList.add(`glider-${index + 1}`);

    // Inicializa o Glider.js para cada div
    new Glider(div, {
        slidesToShow: 1,
        slidesToScroll: 1,
        scrollLock: false,
        draggable: true,
        rewind: true,
        arrows: {
            prev: '.glider-prev-${index + 1}',
            next: '.glider-next-${index + 1}'
        },
    });
});


});