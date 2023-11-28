window.addEventListener('load',function(){
	new Glider(document.querySelector('.guiaCarousel'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.gC',
	        next: '.glider-next.gC'
	    },
	    responsive: [
	   	{
	      breakpoint: 800,
	      settings: {
	        slidesToShow: 1.5,
	        slidesToScroll: 1.5,
	        duration: 0.25,
            itemWidth: 650,
	    	}
		}
	  ]
	});
});