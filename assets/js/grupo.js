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
    document.addEventListener('DOMContentLoaded', function () {
        var buttons = document.querySelectorAll('.verRoteiro');
        
        buttons.forEach(function (button) {
            button.addEventListener('click', function () {
                var roteiro = this.closest('.btns').nextElementSibling;

                // Alternar a classe 'open' em roteiro
                roteiro.classList.toggle('open');
            });
        });
    });
}

$(".close").closest(".roteiro").removeClass("open");