window.addEventListener('load',function(){
	new Glider(document.querySelector('.nCarousel'), {
	    slidesToShow: 1.2,
	    slidesToScroll: 1,
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
	        slidesToShow: 2.5,
	        slidesToScroll: 1,
	        duration: 0.25
	      }
	    }
	  ]
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
	    arrows: {
	        prev: '.glider-prev.mN',
	        next: '.glider-next.mN'
	    },
	    responsive: [
	   	{
	      breakpoint: 700,
	      settings: {
	        slidesToShow: 2.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25,
	    	}
		}, {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25,
	      }
	    }
	  ]
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.tCarousel'), {
	    slidesToShow: 1.2,
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: true,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.tN',
	        next: '.glider-next.tN'
	    },
	    responsive: [
		{
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }, {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2.8,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }, {
	      breakpoint: 1400,
	      settings: {
	        slidesToShow: 3.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});
});