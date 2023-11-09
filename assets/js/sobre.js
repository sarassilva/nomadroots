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

window.addEventListener('load',function(){
	new Glider(document.querySelector('.mCarousel'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: false,
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 1024,
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
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }, {
	      // screens greater than >= 1024px
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }, {
	      // screens greater than >= 1024px
	      breakpoint: 1700,
	      settings: {
	        slidesToShow: 4.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});
});