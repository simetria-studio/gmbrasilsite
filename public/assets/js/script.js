$("#active-menu").click(function(){
    $(".menu").animate({
      opacity: '1',
      width: '100%'
    });
  });
$(".close").click(function(){
    $(".menu").animate({
      opacity: '0',
      width: '0'
    });
  });
