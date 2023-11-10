window.addEventListener('load',function(){
	var sliders = document.querySelectorAll('.glider');

	for (var i = 0; i < sliders.length; i++) {
	  var glide = new Glide(sliders[i], {
	    slidesToShow: 'auto',
	    slidesToScroll: 1,
	    draggable: false,
	    scrollLock: false,
	    dots: false,
	    rewind: true,
	    arrows: {
	        prev: '.glider-prev',
	        next: '.glider-next'
	    }
	  });
	  
	  glide.mount();
	}
});

$(function(){
$('.popup').on('click', function(){
    $(this).addClass('show').siblings().removeClass('show');
  });
});