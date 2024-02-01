window.addEventListener('load',function(){
	new Glider(document.querySelector('.roteiro1'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.roteiro-um',
	        next: '.glider-next.roteiro-um'
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});

	new Glider(document.querySelector('.roteiro2'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.roteiro-dois',
	        next: '.glider-next.roteiro-dois'
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});

	new Glider(document.querySelector('.roteiro3'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.roteiro-tres',
	        next: '.glider-next.roteiro-tres'
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});

	new Glider(document.querySelector('.roteiro4'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 400,
	    draggable: true,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.roteiro-quatro',
	        next: '.glider-next.roteiro-quatro'
	    },
	    responsive: [
		{
	      // screens greater than >= 1024px
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        itemWidth: 150,
	        duration: 0.25
	      }
	    }
	  ]
	});

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


$(document).ready(function() {
	// Adicionar a classe 'show' ao primeiro elemento se a largura da tela for maior que 1200px
	if ($(window).width() > 1200) {
	  $('.contnt:first').addClass('first');
	}
  
	$('.number').click(function() {
	  var content = $(this).next('.contnt');        
  
	  var isAlreadyVisible = content.hasClass('show');
  
	  // Remover a classe .show de todas as outras divs
	  $('.contnt').removeClass('show');
  
	  // Adicionar a classe .show se a div clicada não a possuir
	  if (!isAlreadyVisible) {
		content.addClass('show');
	  }
  
	  // Adicionar a classe .down ao .number se a .contnt correspondente estiver visível
	  $('.number').removeClass('down');
	  if (content.hasClass('show')) {
		$(this).addClass('down');
	  }
	});
  });
  