window.addEventListener('load',function(){
	var sliders = document.querySelectorAll('.glider');

	for (var i = 0; i < sliders.length; i++) {
	  var glide = new Glide(sliders[i], {
	    gap: 15,
	    slidesToShow: 'auto',
	  });
	  
	  glide.mount();
	}
}

$(function(){
$('.popup').on('click', function(){
    $(this).addClass('show').siblings().removeClass('show');
  });
});