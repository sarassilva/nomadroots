
window.addEventListener('load',function(){

const divs = document.querySelectorAll('.glider');

// Itera sobre cada div
divs.forEach((div, index) => {
    // Adiciona um número à classe existente ou adiciona uma nova classe com o número
    div.classList.add(`glider-${index + 1}`);

    // Inicializa o Glider.js para cada div
    new Glider(div, {
        slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
        arrows: false,
    });
});


});