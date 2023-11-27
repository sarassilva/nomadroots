window.addEventListener('load',function(){
	new Glider(document.querySelector('.glider'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev',
	        next: '.glider-next'
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
	new Glider(document.querySelector('.stps'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.stprev',
	        next: '.glider-next.stpnext'
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 1400,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 1,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.books'), {
	    slidesToShow: 1.5,
	    slidesToScroll: 1.5,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: false,
	    arrows: {
	        prev: '.glider-prev.nB',
	        next: '.glider-next.nB'
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 700,
	      settings: {
	        slidesToShow: 2.5,
	        slidesToScroll: 1.5,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    },{
	      // screens greater than >= 1024px
	      breakpoint: 800,
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
	new Glider(document.querySelector('.testimonial'), {
	  // Mobile-first defaults
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  scrollLock: false,
	  rewind: true,
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
	new Glider(document.querySelector('.meets'), {
	  // Mobile-first defaults
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  scrollLock: false,
	  rewind: true,
	  arrows: {
	    prev: '.glider-prev.meet',
	    next: '.glider-next.meet'
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
	new Glider(document.querySelector('.where'), {
	  // Mobile-first defaults
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  scrollLock: false,
	  draggable: true,
	  rewind: true,
	  arrows: {
	    prev: '.glider-prev.whr',
	    next: '.glider-next.whr'
	  },
	});
});

const faqBox = document.querySelector('.faqBox');
function faq() {
	faqBox.classList.toggle('open');
}

const popupBox = document.querySelector('.turmaPopup');
function popup() {
	popupBox.classList.toggle('open');
}