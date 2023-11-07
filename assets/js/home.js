window.addEventListener('load',function(){
	new Glider(document.querySelector('.meetGlider'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.meetPrev',
	        next: '.glider-next.meetNext'
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

window.addEventListener('load',function(){
	new Glider(document.querySelector('.roteiroGliderMobile'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.roteiroMobPrev',
	        next: '.glider-next.roteiroMobNext'
	    },
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.roteiroGlider'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.roteiroPrev',
	        next: '.glider-next.roteiroNext'
	    },
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.grupoGliderMobile'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.grupoMobPrev',
	        next: '.glider-next.grupoMobNext'
	    },
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.grupoGlider'), {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.grupoPrev',
	        next: '.glider-next.grupoNext'
	    },
	});
});