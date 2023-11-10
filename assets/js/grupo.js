window.addEventListener('load',function(){
	new Glider(document.querySelectorAll('.glider'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev',
	        next: '.glider-next'
	    }
	});
});

window.addEventListener('load',function(){
	const gliders = document.querySelectorAll('.glider');

	 gliders.forEach(function () {
        new Glider(document.querySelectorAll('.glider'), {
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
