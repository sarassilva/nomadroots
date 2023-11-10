 window.addEventListener('load', function () {
            [].forEach.call(document.querySelectorAll('.glider'), function (ele) {
                ele.addEventListener('glider-slide-visible', function (event) {
                    var glider
                        = Glider(this); console.log('Slide Visible %s', event.detail.slide)
                });
                ele.addEventListener('glider-slide-hidden', function (event) {
                    console.log('Slide Hidden %s', event.detail.slide)
                });
                ele.addEventListener('glider-refresh', function (event) {
                    console.log('Refresh')
                });
                ele.addEventListener('glider-loaded', function
                    (event) {
                        console.log('Loaded')
                });
                new Glider(ele, {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    scrollLock: true,
                    draggable: true,
                    dots: ele.querySelector('.dots'),
                    arrows: {
                        prev: ele.querySelector('.glider-prev'),
                        next: ele.querySelector('.glider-next')
                    }
                });
            });
        });




