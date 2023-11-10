const options = { 
      type: "carousel",
      animationDuration: 600,
      gap: 0
};

const carousels = document.querySelectorAll(".glider");

Object.values(carousels).map(carousel => {
      new Glide(carousel, options).mount();
});

$(function(){
$('.popup').on('click', function(){
    $(this).addClass('show').siblings().removeClass('show');
  });
});