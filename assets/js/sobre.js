window.addEventListener('load',function(){
	new Glider(document.querySelector('.nCarousel'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.nc',
	        next: '.glider-next.nc'
	    }
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.mCarousel'), {
	    slidesToShow: 1.5,
	    slidesToScroll: 1.5,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: false,
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.tCarousel'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.tN',
	        next: '.glider-next.tN'
	    }
	});
});
