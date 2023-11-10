 window.addEventListener('load', function () {
            [].forEach.call(document.querySelectorAll('.glider'), function (ele) {

                new Glider(ele, {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    scrollLock: true,
                    draggable: true,
                    rewind: true,
                    dots: ele.querySelector('.dots'),
                    arrows: {
                        prev: ele.parentNode.querySelector('.glider-prev'),
                        next: ele.parentNode.querySelector('.glider-next')
                    }
                });
            });
        });




