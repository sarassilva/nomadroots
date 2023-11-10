window.addEventListener('load',function(){
	new Glider(document.querySelector('.images'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    itemWidth: 400,
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