 window.addEventListener('load', function () {
    [].forEach.call(document.querySelectorAll('.glider'), function (ele) {

        new Glider(ele, {
            slidesToShow: 1,
		    slidesToScroll: 1,
		    itemWidth: 400,
		    draggable: true,
		    scrollLock: false,
		    dots: false,
		    rewind: true,
            dots: ele.querySelector('.dots'),
            arrows: {
                prev: ele.parentNode.querySelector('.glider-prev'),
                next: ele.parentNode.querySelector('.glider-next')
            }
        });
    });
});


//collapsed
document.addEventListener('DOMContentLoaded', function () {
	var buttons = document.querySelectorAll('.verRoteiro');

	buttons.forEach(function (button) {
	    button.addEventListener('click', function () {
	        var roteiro = this.closest('.btns').nextElementSibling;

	        // Alternar a classe 'open' em roteiro
	        roteiro.classList.toggle('open');
	    });
	});

	// Adiciona evento ao botão de fechar
	var closeButtons = document.querySelectorAll('.roteiro .close');
	    closeButtons.forEach(function (closeButton) {
	        closeButton.addEventListener('click', function () {
	            var roteiro = this.parentElement;

	            // Remove a classe 'open' da div pai
	            roteiro.classList.remove('open');
	        });
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

