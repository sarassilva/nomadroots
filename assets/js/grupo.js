document.addEventListener('DOMContentLoaded', function () {
	new Glider(document.querySelector('.glider'), {
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


