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
      goToPage($(this).next().attr("data"));
      e.preventDefault();
    });
    $(this).children("a[class=\"box\"]").fadeIn(200);  
  })
  .mouseleave(function() {
    $(this).children("a[class=\"box\"]").fadeOut(150);
  });

  $("body").click(function(e) {
    let el = $(e.target);
    if(el.is("img")) {
      if(el.parent().is("a[class=\"navbar-brand\"]")) {
        goToPage(el.parent().attr("href"))
      }
    } else if(el.is("a[class=\"nav-link\"]") || el.is("a[class=\"pt-link\"]") || el.parent().is("ul[class=\"bottom-nav\"] li")) {
      let url = el.attr("href");
      if(url === "#"){
        console.log("url not found");
      } else {
        goToPage(url);
      }
    } else if(el.is("a[class=\"medsos\"]")) {
      window.open(el.attr("href"),"_blank");
    } else if(el.is("i[class*=\"fa\"]")) {
      if(el.parent().is("a[class=\"medsos\"]")) {
        window.open(el.parent().attr("href"),"_blank");
      }
    } else if(el.is("span")) {
      if(el.parent().is("a[class=\"more-link\"]")) {
        goToPage(el.parent().attr("href"));
      }
    } else {
      if(el.parent().is("div[class*=\"testimoni\"] p")) {
        window.open(el.attr("href"),"_blank");
      }
    }
    e.preventDefault();
  });

  function goToPage(url) {
    $(".app").fadeIn(300, function() {
      location.href=url
    });
  }

  // Tetap dibawah
  $(".app").children().delay(1000).fadeOut(300, function() {
    $(this).parent().fadeOut(400);
  });
});