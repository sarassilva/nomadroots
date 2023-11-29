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
	      breakpoint: 1030,
	      settings: {
	        slidesToShow: 1.5,
	        slidesToScroll: 1.5,
	        duration: 0.25,
            itemWidth: 650,
	    	}
		}, {
            breakpoint: 1400,
            settings: {
              slidesToShow: 1.9,
              slidesToScroll: 1.9,
              duration: 0.25,
              itemWidth: 650,
              }
          }, {
            breakpoint: 1800,
            settings: {
              slidesToShow: 2.5,
              slidesToScroll: 1.5,
              duration: 0.25,
              itemWidth: 650,
              }
          }
	  ]
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.livroItem'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.lC',
	        next: '.glider-next.lC'
	    },
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.autorItem'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.aC',
	        next: '.glider-next.aC'
	    },
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.roteiroCarousel'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.aC',
	        next: '.glider-next.rC'
	    },
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.testimonial'), {
	  // Mobile-first defaults
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  scrollLock: false,
	  rewind: true,
	  draggable: false,
	  arrows: {
	    prev: '.glider-prev.ttm',
	    next: '.glider-next.ttm'
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