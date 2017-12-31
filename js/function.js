$(document).ready(function() {
  $(".slider").bxSlider({
    adaptiveHeight: true,
    touchEnabled: false,
    auto: true,
  });
});

document.querySelector('.program-list').addEventListener('mouseover', eventItem);
document.querySelector('.program-list').addEventListener('mouseout', eventItem);

function eventItem(e) {
  if(e.target.parentElement.parentElement.parentElement.classList.contains('card-program')) {

    function fadeOut( elem, ms )
    {
      if( ! elem )
        return;

      if( ms )
      {
        var opacity = 1;
        var timer = setInterval( function() {
          opacity -= 50 / ms;
          if( opacity <= 0.8 )
          {
            clearInterval(timer);
            opacity = 0.8;
          }
          elem.style.opacity = opacity;
          elem.style.filter = "alpha(opacity=" + opacity * 100 + ")";
        }, 50 );
      }
      else
      {
        elem.style.opacity = 0.8;
        elem.style.filter = "alpha(opacity=0.8)";
      }
    }


    function fadeIn( elem, ms )
    {
      if( ! elem )
        return;

      elem.style.opacity = 0.8;
      elem.style.filter = "alpha(opacity=800)";

      if( ms )
      {
        var opacity = 0.8;
        var timer = setInterval( function() {
          opacity += 50 / ms;
          if( opacity >= 1 )
          {
            clearInterval(timer);
            opacity = 1;
          }
          elem.style.opacity = opacity;
          elem.style.filter = "alpha(opacity=" + opacity * 100 + ")";
        }, 50 );
      }
      else
      {
        elem.style.opacity = 1;
        elem.style.filter = "alpha(opacity=1)";
      }
    }

    if(e.type === 'mouseover') {
      console.log(e.type);
      fadeOut(e.target, 2000);
    } else {
      fadeIn(e.target, 2000);
    }

  }
}
