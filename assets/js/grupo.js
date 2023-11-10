window.addEventListener('load', function () {
    // Obtém todas as divs com a classe '.glider' na página
    const divs = document.querySelectorAll('.glider');

    // Itera sobre cada div
    divs.forEach((div, index) => {
        // Adiciona um número à classe existente ou adiciona uma nova classe com o número
        div.classList.add(`glider-${index + 1}`);

        // Inicializa o Glider.js para cada div
        const glider = new Glider(div, {
            slidesToShow: 'auto',
            slidesToScroll: 1,
            itemWidth: 800,
            draggable: true,
            scrollLock: false,
            dots: false,
            rewind: true,
        });

        // Obtém as setas de navegação específicas para este carrossel
        const prevArrow = div.querySelector('.glider-prev');
        const nextArrow = div.querySelector('.glider-next');

        // Adiciona um ouvinte de evento para as setas de navegação
        if (prevArrow) {
            prevArrow.addEventListener('click', function () {
                glider.scrollItem('prev', { scrollBy: 1 });
            });
        }

        if (nextArrow) {
            nextArrow.addEventListener('click', function () {
                glider.scrollItem('next', { scrollBy: 1 });
            });
        }
    });
});

