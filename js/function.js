$(document).ready(function() {
  $(".slider").bxSlider({
    adaptiveHeight: true,
    touchEnabled: false,
    auto: true,
  });

  $(".card-link").on("mouseover mouseout", "img", function(e) {
    if(e.type === "mouseover") {
      console.log("Mouse Over");
      $(this).fadeTo("fast", 0.8);
    } else {
      $(this).fadeTo("fast", 1);
    }
  });
});
