window.addEventListener('load', function () {
    // Adiciona classes às setas de navegação
    const arrows = document.querySelectorAll('.glider-prev, .glider-next');
    arrows.forEach((arrow, index) => {
        arrow.classList.add(`seta-${index + 1}`);
    });

    // Obtém todas as divs com a classe '.glider' na página
    const divs = document.querySelectorAll('.glider');

    // Itera sobre cada div
    divs.forEach((div, index) => {
        // Adiciona um número à classe existente ou adiciona uma nova classe com o número
        div.classList.add(`glider-${index + 1}`);

        // Obtém os seletores específicos para as setas de navegação desta div
        const prevArrowSelector = `.glider-prev.seta-${index + 1}`;
        const nextArrowSelector = `.glider-next.seta-${index + 1}`;

        // Inicializa o Glider.js para cada div
        new Glider(div, {
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
    });
});
