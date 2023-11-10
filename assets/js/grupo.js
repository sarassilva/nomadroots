window.addEventListener('load',function(){
	const gliders = document.querySelectorAll('.glider');

	 gliders.forEach(function (glider) {
        new Glider(glider, {
            slidesToShow: 'auto',
            slidesToScroll: 1,
            draggable: false,
            scrollLock: false,
            dots: false,
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
        });
    });
});

