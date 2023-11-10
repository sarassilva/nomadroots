 window.addEventListener('load', function () {
    // Selecione todas as divs com a classe "glider"
    const gliders = document.querySelectorAll('.glider');

    // Itere sobre cada div e inicialize o Glider para ela
    gliders.forEach(function (glider) {
        new Glider(glider, {
            slidesToShow: 'auto',
            slidesToScroll: 1,
            draggable: true,
            dots: false,
            rewind: true,
            arrows: false,
        });
    });
});