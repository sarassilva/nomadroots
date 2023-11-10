window.addEventListener('load',function(){
	new Glider(document.querySelector('.glider'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
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

