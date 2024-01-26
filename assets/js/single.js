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
	        slidesToScroll: 1,
	        duration: 0.25,
            itemWidth: 650,
	    	}
		}, {
            breakpoint: 1400,
            settings: {
              slidesToShow: 1.9,
              slidesToScroll: 1,
              duration: 0.25,
              itemWidth: 650,
              }
          }
	  ]
	});
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.LivroCarousel'), {
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
	new Glider(document.querySelector('.autorCarousel'), {
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
	    dots: '#dots',
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev.rC',
	        next: '.glider-next.rC'
	    },
	});

	var customDotsContainer = document.querySelector('#dots');
	var dots = customDotsContainer.querySelectorAll('.glider-dot');

	// Adicionar números aos dots imediatamente
	dots.forEach(function (dot, index) {
		dot.innerHTML = '<span> Dia ' + ( index + 1) + '</span>';
	}); 
});
  

window.addEventListener('load',function(){
	new Glider(document.querySelector('.galeria'), {
	  // Mobile-first defaults
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  scrollLock: false,
	  rewind: true,
	  draggable: false,
	  arrows: {
	    prev: '.glider-prev.g',
	    next: '.glider-next.g'
	  },
	  responsive: [
		{
		breakpoint: 1030,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			}
		}
	  ]
	});
});

//hide arrows on gallery > 4
document.addEventListener('glider-loaded', function () {
	var gliderWrapper = document.querySelector('.galeria');
	var slides = gliderWrapper.querySelectorAll('.glider-slide');
	var prevArrow = document.querySelector('.glider-prev');
	var nextArrow = document.querySelector('.glider-next');

	if (slides.length > 4) {
	} else { 
		// Esconde as setas
		if (prevArrow) {
			prevArrow.style.display = 'none';
		}
		if (nextArrow) {
			nextArrow.style.display = 'none';
		}
	}
});

window.addEventListener('load',function(){
	new Glider(document.querySelector('.hotelCarousel'), {
	  // Mobile-first defaults
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  scrollLock: false,
	  rewind: true,
	  draggable: true,
	  arrows: {
	    prev: '.glider-prev.hC',
	    next: '.glider-next.hC'
	  }
	});
});

//update price when qtd change
document.querySelector(".qty").addEventListener("change", calculoPrecoQtd);

function calculoPrecoQtd() {
    var qtd = parseInt(document.querySelector('.qty').value, 10);

    var oldPrice = document.querySelector('.preco bdi').textContent;
    var precoCheio = parseInt(oldPrice.replace('R$', '').replace(".", "").trim(), 10);
    

    var calculo = precoCheio * qtd;

    var valorFinal = calculo.toLocaleString('pt-BR', {
    style: 'currency',
    currency: 'BRL'
});

    document.querySelector('.productPrice .woocommerce-Price-amount bdi').innerText = valorFinal;
}

//faq
function faq() {
    var faqBox = document.querySelector('.faqBox');
    var seta = document.querySelector('.down');

    faqBox.classList.toggle('open');
    seta.classList.toggle('rotate');
}


