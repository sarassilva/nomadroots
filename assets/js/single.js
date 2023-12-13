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
	new Glider(document.querySelector('.galeria'), {
	  // Mobile-first defaults
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  scrollLock: false,
	  rewind: true,
	  draggable: true,
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

    var oldPrice = document.querySelector('.price bdi').textContent;
    var precoCheio = parseInt(oldPrice.replace('R$', '').replace(".", "").trim(), 10);
    

    var calculo = precoCheio * qtd;

    var valorFinal = calculo.toLocaleString('pt-BR', {
    style: 'currency',
    currency: 'BRL'
});

    document.querySelector('.single_variation').innerText = 'Total: ' + valorFinal;
}

//faq
const faqBox = document.querySelector('.faqBox');
const seta = document.querySelector('.down');
function faq() {
	faqBox.classList.toggle('open');
	seta.classList.toggle('rotate');
;}

//faq colapsed
document.addEventListener('DOMContentLoaded', function () {
    var perguntas = document.querySelectorAll('.question');

    for (var i = 0; i < perguntas.length; i++) {
        perguntas[i].addEventListener('click', function () {
            // Remove a classe .show de todas as perguntas
            var todasPerguntas = document.querySelectorAll('.question');
            for (var j = 0; j < todasPerguntas.length; j++) {
                todasPerguntas[j].classList.remove('show');
            }

            // Adiciona a classe .show à pergunta clicada
            this.classList.add('show');

            var resposta = this.nextElementSibling;

            resposta.classList.toggle('show');

            var respostasVisiveis = document.querySelectorAll('.answer .hide-links.show');

            if (respostasVisiveis.length > 1) {
                for (var k = 0; k < respostasVisiveis.length; k++) {
                    respostasVisiveis[k].classList.remove('show');
                }

                resposta.classList.add('show');
            }
        });
    }
});

