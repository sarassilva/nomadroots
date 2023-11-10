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
    var buttons = document.querySelectorAll('button.verRoteiro');
    
    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            var content = this.nextElementSibling;

            // Fecha todos os elementos visíveis
            var visibleContents = document.querySelectorAll('.roteiro:visible');
            visibleContents.forEach(function (visibleContent) {
                visibleContent.style.display = 'none';
            });

            // Abre o próximo elemento
            content.style.display = 'block';
        });
    });
});