window.addEventListener('load',function(){
	new Glider(document.querySelector('.glider'), {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    itemWidth: 'auto',
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev',
	        next: '.glider-next'
	    },
	});
});

$(function(){
$('.popup').on('click', function(){
    $(this).addClass('show').siblings().removeClass('show');
  });
});