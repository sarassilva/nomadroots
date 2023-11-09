window.addEventListener('load',function(){
	new Glider(document.querySelector('.nCarousel'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.nc',
	        next: '.glider-next.nc'
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});
});