window.addEventListener('load', function () {
    // Obtém todas as divs com a classe '.glider' na página
    const divs = document.querySelectorAll('.glider');

    // Itera sobre cada div
    divs.forEach((div, index) => {
        // Adiciona um número à classe existente ou adiciona uma nova classe com o número
        div.classList.add('glider-${index + 1}');

        // Obtém os seletores específicos para as setas de navegação desta div
        const prevArrowSelector = '.glider-${index + 1} .glider-prev';
        const nextArrowSelector = '.glider-${index + 1} .glider-next';

        // Adiciona um número à classe das setas
        const prevArrow = div.querySelector('.glider-prev');
        const nextArrow = div.querySelector('.glider-next');

        prevArrow.classList.add('seta-${index + 1}');
        nextArrow.classList.add('seta-${index + 1}');

        // Inicializa o Glider.js para cada div
        const glider = new Glider(div, {
            slidesToShow: 'auto',
            slidesToScroll: 1,
            itemWidth: 800,
            draggable: true,
            scrollLock: false,
            dots: false,
            rewind: true,
            arrows: {
                prev: prevArrowSelector,
                next: nextArrowSelector
            }
        });

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

