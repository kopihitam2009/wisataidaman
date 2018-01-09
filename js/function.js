$(document).ready(function() {
  $("html").css("visibility", "visible")

  $(".slider").bxSlider({
    adaptiveHeight: true,
    touchEnabled: false,
    auto: true,
  });

  let a = $("<a class=\"box\" href=\"#\"></a>");
  a.css({
    "width":"100%",
    "background":"rgba(67, 68, 155,.9)",
    "position":"absolute",
    "top":"0",
    "left":"0",
    "display":"none",
    "cursor":"pointer"
  });

  const div = $("<div></div>");
  div.css({
    "text-align":"center",
    "margin-top":"25%"
  });

  const icon = $("<i class=\"fa fa-search\" aria-hidden=\"true\"></i>");
  icon.css({
    "color":"rgb(240, 240, 240)",
    "font-size":"28px",
  })

  const p = $("<p>View Program</p>");
  p.css({
    "color":"rgb(240, 240, 240)",
    "text-decoration":"none",
    "margin-top":"5px"
  });

  $(div).append(icon,p);
  $(a).append(div);
  $(".card").prepend(a);

  $(".card")
  .mouseenter(function() {
    let ch = $(this).height();
    $(this).children("a[class=\"box\"]").css("height", ch);
    $(this).children("a[class=\"box\"]").bind("click", function(e) {
      location.href= $(this).next().attr("href");
      e.preventDefault();
    });
    $(this).children("a[class=\"box\"]").fadeIn(200);  
  })
  .mouseleave(function() {
    $(this).children("a[class=\"box\"]").fadeOut(150);
  });

});