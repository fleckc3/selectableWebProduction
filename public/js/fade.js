$(window).scroll(function(){
    $(".arrow").css("opacity", 1 - $(window).scrollTop() / 50);
  //250 is fade pixels
  });
