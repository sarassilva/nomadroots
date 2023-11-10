const arrows = document.querySelectorAll('.glider-prev, .glider-next');
arrows.forEach((arrow, index) => {
    arrow.classList.add(`seta-${index + 1}`);
});


window.addEventListener('load',function(){

	const divs = document.querySelectorAll('.glider');
	const prevArrowSelector = `.glider-prev.seta-${index + 1}`;
    const nextArrowSelector = `.glider-next.seta-${index + 1}'`;

	// Itera sobre cada div
	divs.forEach((div, index) => {
	    // Adiciona um número à classe existente ou adiciona uma nova classe com o número
	    div.classList.add(`glider-${index + 1}`);

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