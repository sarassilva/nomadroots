 document.addEventListener('DOMContentLoaded', function () {
            // Selecione todas as divs com a classe "glider"
            const gliders = document.querySelectorAll('.glider');

            // Itere sobre cada div e inicialize o Glider para ela
            gliders.forEach(function (glider) {
                new Glider(glider, {
                    slidesToShow: 'auto',
                    slidesToScroll: 1,
                    draggable: false,
                    scrollLock: false,
                    dots: false,
                    rewind: true,
                    arrows: {
                        prev: '.glider-prev${index + 1}',
                        next: '.glider-next${index + 1}'
                    },
                });
            });
        });