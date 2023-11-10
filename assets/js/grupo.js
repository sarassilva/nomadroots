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


//menu collapsed
$(function () { 
	$("button.verRoteiro ").click(function() {        
	    $(this).next().toggle();

	    if($('.roteiro:visible').length > 1) {
	        $('.roteiro:visible').hide();
	        $(this).next().show();
	    }
	}); 
});

